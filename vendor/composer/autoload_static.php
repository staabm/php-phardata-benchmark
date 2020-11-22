<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ded12e3541d06e00f38bd7ff205a5e6
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'splitbrain\\PHPArchive\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'splitbrain\\PHPArchive\\' => 
        array (
            0 => __DIR__ . '/..' . '/splitbrain/php-archive/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ded12e3541d06e00f38bd7ff205a5e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ded12e3541d06e00f38bd7ff205a5e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ded12e3541d06e00f38bd7ff205a5e6::$classMap;

        }, null, ClassLoader::class);
    }
}