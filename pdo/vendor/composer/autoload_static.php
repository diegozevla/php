<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd453f264e92b1931d619feef3606cc4c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd453f264e92b1931d619feef3606cc4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd453f264e92b1931d619feef3606cc4c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
