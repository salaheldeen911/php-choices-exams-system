<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7612dfce4dd2cd86036efa65be58482
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'O' => 
        array (
            'Ozdemir\\Datatables\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Ozdemir\\Datatables\\' => 
        array (
            0 => __DIR__ . '/..' . '/ozdemir/datatables/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7612dfce4dd2cd86036efa65be58482::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7612dfce4dd2cd86036efa65be58482::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7612dfce4dd2cd86036efa65be58482::$classMap;

        }, null, ClassLoader::class);
    }
}
