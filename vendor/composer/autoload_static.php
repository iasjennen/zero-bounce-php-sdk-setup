<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6847c19a84ea7acb61bed290a68af6b4
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZeroBounce\\SDK\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZeroBounce\\SDK\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6847c19a84ea7acb61bed290a68af6b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6847c19a84ea7acb61bed290a68af6b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
