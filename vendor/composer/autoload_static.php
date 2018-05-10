<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a8e6ef2d30e7d95a5d7a14e48902d61
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ephp-swoole\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ephp-swoole\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a8e6ef2d30e7d95a5d7a14e48902d61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a8e6ef2d30e7d95a5d7a14e48902d61::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
