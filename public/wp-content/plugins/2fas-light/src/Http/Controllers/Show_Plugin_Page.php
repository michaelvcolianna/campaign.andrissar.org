<?php
declare(strict_types=1);

namespace TwoFAS\Light\Http\Controllers;

use TwoFAS\Light\Http\{Controller, Request, View_Response};
use TwoFAS\Light\Http\Action_Index;
use TwoFAS\Light\Rate_Plugin_Prompt\Rate_Plugin_Prompt;
use TwoFAS\Light\Storage\{Storage, Trusted_Devices_Storage, User_Storage};
use TwoFAS\Light\Totp\{QR_Generator, Secret_Generator};

class Show_Plugin_Page extends Controller {
	
	/**
	 * @var User_Storage
	 */
	private $user_storage;
	
	/**
	 * @var Trusted_Devices_Storage
	 */
	private $trusted_devices_storage;
	
	/**
	 * @var QR_Generator
	 */
	private $qr_generator;
	
	/**
	 * @var Secret_Generator
	 */
	private $secret_generator;
	
	/**
	 * @var Rate_Prompt
	 */
	private $rate_plugin_prompt;
	
	/**
	 * @param Storage            $storage
	 * @param QR_Generator       $qr_generator
	 * @param Secret_Generator   $secret_generator
	 * @param Rate_Plugin_Prompt $rate_plugin_prompt
	 */
	public function __construct(
		Storage $storage,
		QR_Generator $qr_generator,
		Secret_Generator $secret_generator,
		Rate_Plugin_Prompt $rate_plugin_prompt
	) {
		$this->user_storage            = $storage->get_user_storage();
		$this->trusted_devices_storage = $storage->get_trusted_devices_storage();
		$this->qr_generator            = $qr_generator;
		$this->secret_generator        = $secret_generator;
		$this->rate_plugin_prompt      = $rate_plugin_prompt;
	}
	
	
	public function show_page( Request $request ): View_Response {
		$totp_secret     = $this->get_totp_secret();
		$qr_code         = $this->qr_generator->generate_qr_code( $totp_secret );
		$trusted_devices = $this->trusted_devices_storage->get_trusted_devices( $this->user_storage->get_user_id() );
		
		return $this->view(
			'plugin_main_page.html.twig',
			[
				'qr_code'                              => $qr_code,
				'totp_secret'                          => $totp_secret,
				'twofas_light_user_is_configured'      => $this->user_storage->is_totp_configured(),
				'twofas_light_user_configuration_date' => $this->get_totp_secret_update_timestamp(),
				'twofas_light_menu_page'               => Action_Index::TWOFAS_LIGHT_ADMIN_PAGE_SLUG,
				'twofas_light_totp_status'             => $this->user_storage->get_totp_status(),
				'trusted_devices'                      => $trusted_devices,
				'display_rate_plugin_prompt'           => $this->rate_plugin_prompt->should_display(),
			] );
	}
	
	private function get_totp_secret(): string {
		
		if ( ! $this->user_storage->is_totp_configured() ) {
			$totp_secret = $this->secret_generator->generate_totp_secret();
		} else {
			$totp_secret = $this->user_storage->get_totp_secret();
		}
		
		return $totp_secret;
	}
	
	/**
	 * @return int|null
	 */
	private function get_totp_secret_update_timestamp() {
		$totp_secret_update_date = $this->user_storage->get_totp_secret_update_date();
		if ( null !== $totp_secret_update_date ) {
			return $totp_secret_update_date->getTimestamp();
		}
		
		return null;
	}
}
