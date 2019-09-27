<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b0c8f445e6206bb76c8ea6f42d1a99b
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/alistairshaw/name-the-color/src',
        1 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit7b0c8f445e6206bb76c8ea6f42d1a99b::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}