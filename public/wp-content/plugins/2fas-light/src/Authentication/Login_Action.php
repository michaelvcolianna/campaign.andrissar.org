<?php

namespace TwoFAS\Light\Authentication;

abstract class Login_Action {

	const STOP_LOGIN_PROCESS           = 'stop-login-process';
	const LOG_IN_WITH_TOTP_CODE        = 'log-in-with-totp-code';
	const VERIFY_TOTP_CODE             = 'verify-totp-code';
}
