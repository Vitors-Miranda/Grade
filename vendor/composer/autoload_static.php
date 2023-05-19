<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53fa67f3b9df3d93740bed8611aab460
{
    public static $files = array (
        '8da1fb9565b7cada926e2d495f43fb11' => __DIR__ . '/../..' . '/Config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53fa67f3b9df3d93740bed8611aab460::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53fa67f3b9df3d93740bed8611aab460::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53fa67f3b9df3d93740bed8611aab460::$classMap;

        }, null, ClassLoader::class);
    }
}