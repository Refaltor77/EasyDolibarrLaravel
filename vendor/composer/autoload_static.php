<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6887d39da592315a052343cdde68a3a3
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Refaltor\\EasyDolibarrLaravel\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Refaltor\\EasyDolibarrLaravel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6887d39da592315a052343cdde68a3a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6887d39da592315a052343cdde68a3a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6887d39da592315a052343cdde68a3a3::$classMap;

        }, null, ClassLoader::class);
    }
}
