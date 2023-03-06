<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98e63c06d851316bface80eee057a65d
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98e63c06d851316bface80eee057a65d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98e63c06d851316bface80eee057a65d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98e63c06d851316bface80eee057a65d::$classMap;

        }, null, ClassLoader::class);
    }
}