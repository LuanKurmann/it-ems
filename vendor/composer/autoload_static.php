<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< Updated upstream
class ComposerStaticInit0859765a9b396ab4406c80ef951e26d4
=======
class ComposerStaticInit90fc6973ce98f7928a216d7a1aa727b1
>>>>>>> Stashed changes
{
    public static $files = array (
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/src',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< Updated upstream
            $loader->prefixLengthsPsr4 = ComposerStaticInit0859765a9b396ab4406c80ef951e26d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0859765a9b396ab4406c80ef951e26d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0859765a9b396ab4406c80ef951e26d4::$classMap;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInit90fc6973ce98f7928a216d7a1aa727b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90fc6973ce98f7928a216d7a1aa727b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90fc6973ce98f7928a216d7a1aa727b1::$classMap;
>>>>>>> Stashed changes

        }, null, ClassLoader::class);
    }
}
