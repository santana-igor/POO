<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46cd38bf49bf205ede5cb4717489adc8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46cd38bf49bf205ede5cb4717489adc8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46cd38bf49bf205ede5cb4717489adc8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
