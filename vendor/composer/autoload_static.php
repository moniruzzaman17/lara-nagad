<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16881e5c60c1bdcd9e60230bb26d870f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moniruzzaman17\\Nagad\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moniruzzaman17\\Nagad\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16881e5c60c1bdcd9e60230bb26d870f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16881e5c60c1bdcd9e60230bb26d870f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16881e5c60c1bdcd9e60230bb26d870f::$classMap;

        }, null, ClassLoader::class);
    }
}
