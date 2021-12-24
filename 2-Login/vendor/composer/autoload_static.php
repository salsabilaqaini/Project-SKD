<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfbe76eb3640c188678fb3b3d0945808
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfbe76eb3640c188678fb3b3d0945808::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfbe76eb3640c188678fb3b3d0945808::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbfbe76eb3640c188678fb3b3d0945808::$classMap;

        }, null, ClassLoader::class);
    }
}