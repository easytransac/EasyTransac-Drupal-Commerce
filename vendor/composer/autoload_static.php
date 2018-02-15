<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit833f54d33a3b2fa98db774030a3295cf
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyTransac\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyTransac\\' => 
        array (
            0 => __DIR__ . '/..' . '/easytransac/easytransac-sdk-php/sdk/EasyTransac',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit833f54d33a3b2fa98db774030a3295cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit833f54d33a3b2fa98db774030a3295cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
