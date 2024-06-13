<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb4934d1ff6eea9d440d9542433f1be4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shipdeo\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shipdeo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb4934d1ff6eea9d440d9542433f1be4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb4934d1ff6eea9d440d9542433f1be4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb4934d1ff6eea9d440d9542433f1be4::$classMap;

        }, null, ClassLoader::class);
    }
}