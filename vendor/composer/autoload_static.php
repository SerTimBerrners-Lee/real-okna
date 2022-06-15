<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f3635a5e8081b0c264b1594dae80f38
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f3635a5e8081b0c264b1594dae80f38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f3635a5e8081b0c264b1594dae80f38::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
