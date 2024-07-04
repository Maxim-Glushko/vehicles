<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae058587dc9e7307ae3461c7584e5182
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vehicles\\' => 9,
        ),
        'T' => 
        array (
            'TripCalculator\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vehicles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Vehicles',
        ),
        'TripCalculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/TripCalculator',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae058587dc9e7307ae3461c7584e5182::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae058587dc9e7307ae3461c7584e5182::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae058587dc9e7307ae3461c7584e5182::$classMap;

        }, null, ClassLoader::class);
    }
}