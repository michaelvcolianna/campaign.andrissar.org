<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dbc26df2651ddb1f64c3b5d6ba00b25
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '626dcc41390ebdaa619faa02d99943b0' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WhichBrowser\\' => 13,
        ),
        'T' => 
        array (
            'TwoFAS\\Light\\' => 13,
            'TwoFAS\\Encryption\\' => 18,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\PropertyAccess\\' => 33,
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/whichbrowser/parser/src',
            1 => __DIR__ . '/..' . '/whichbrowser/parser/tests/src',
        ),
        'TwoFAS\\Light\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'TwoFAS\\Encryption\\' => 
        array (
            0 => __DIR__ . '/..' . '/twofas/encryption/src',
            1 => __DIR__ . '/..' . '/twofas/encryption/tests',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\PropertyAccess\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/property-access',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'B' => 
        array (
            'BaconQrCode' => 
            array (
                0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
            ),
        ),
    );

    public static $classMap = array (
        'QrReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/QrReader.php',
        'Zxing\\Binarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Binarizer.php',
        'Zxing\\BinaryBitmap' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/BinaryBitmap.php',
        'Zxing\\ChecksumException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ChecksumException.php',
        'Zxing\\Common\\BitArray' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitArray.php',
        'Zxing\\Common\\BitMatrix' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitMatrix.php',
        'Zxing\\Common\\BitSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitSource.php',
        'Zxing\\Common\\CharacterSetECI' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/CharacterSetEci.php',
        'Zxing\\Common\\CharacterSetEci\\AbstractEnum\\AbstractEnum' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/AbstractEnum.php',
        'Zxing\\Common\\DecoderResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DecoderResult.php',
        'Zxing\\Common\\DefaultGridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DefaultGridSampler.php',
        'Zxing\\Common\\DetectorResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DetectorResult.php',
        'Zxing\\Common\\Detector\\MathUtils' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/detector/MathUtils.php',
        'Zxing\\Common\\Detector\\MonochromeRectangleDetector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/detector/MonochromeRectangleDetector.php',
        'Zxing\\Common\\GlobalHistogramBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/GlobalHistogramBinarizer.php',
        'Zxing\\Common\\GridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/GridSampler.php',
        'Zxing\\Common\\HybridBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/HybridBinarizer.php',
        'Zxing\\Common\\PerspectiveTransform' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/PerspectiveTransform.php',
        'Zxing\\Common\\Reedsolomon\\GenericGF' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/GenericGF.php',
        'Zxing\\Common\\Reedsolomon\\GenericGFPoly' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/GenericGFPoly.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonDecoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/ReedSolomonDecoder.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/ReedSolomonException.php',
        'Zxing\\FormatException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/FormatException.php',
        'Zxing\\GDLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/GDLuminanceSource.php',
        'Zxing\\IMagickLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/IMagickLuminanceSource.php',
        'Zxing\\LuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/LuminanceSource.php',
        'Zxing\\NotFoundException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/NotFoundException.php',
        'Zxing\\PlanarYUVLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/PlanarYUVLuminanceSource.php',
        'Zxing\\Qrcode\\Decoder\\BitMatrixParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/BitMatrixParser.php',
        'Zxing\\Qrcode\\Decoder\\DataBlock' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataBlock.php',
        'Zxing\\Qrcode\\Decoder\\DataMask' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask000' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask001' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask010' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask011' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask100' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask101' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask110' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask111' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DecodedBitStreamParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DecodedBitStreamParser.php',
        'Zxing\\Qrcode\\Decoder\\Decoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Decoder.php',
        'Zxing\\Qrcode\\Decoder\\ECB' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ECBlocks' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ErrorCorrectionLevel' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/ErrorCorrectionLevel.php',
        'Zxing\\Qrcode\\Decoder\\FormatInformation' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/FormatInformation.php',
        'Zxing\\Qrcode\\Decoder\\Mode' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Mode.php',
        'Zxing\\Qrcode\\Decoder\\Version' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/AlignmentPattern.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/AlignmentPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\Detector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/Detector.php',
        'Zxing\\Qrcode\\Detector\\FinderPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPattern.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternInfo' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPatternInfo.php',
        'Zxing\\Qrcode\\QRCodeReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/QRCodeReader.php',
        'Zxing\\RGBLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/RGBLuminanceSource.php',
        'Zxing\\Reader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Reader.php',
        'Zxing\\ReaderException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ReaderException.php',
        'Zxing\\Result' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Result.php',
        'Zxing\\ResultPoint' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ResultPoint.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dbc26df2651ddb1f64c3b5d6ba00b25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dbc26df2651ddb1f64c3b5d6ba00b25::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9dbc26df2651ddb1f64c3b5d6ba00b25::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9dbc26df2651ddb1f64c3b5d6ba00b25::$classMap;

        }, null, ClassLoader::class);
    }
}
