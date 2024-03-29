<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d455b8865ca22df002c2b5f99abfc4d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Router' => __DIR__ . '/../..' . '/app/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d455b8865ca22df002c2b5f99abfc4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d455b8865ca22df002c2b5f99abfc4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d455b8865ca22df002c2b5f99abfc4d::$classMap;

        }, null, ClassLoader::class);
    }
}
