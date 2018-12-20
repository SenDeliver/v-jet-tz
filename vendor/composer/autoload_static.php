<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec9391ffacca9ab754673bc00943f80c
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'liw\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'liw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec9391ffacca9ab754673bc00943f80c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec9391ffacca9ab754673bc00943f80c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
