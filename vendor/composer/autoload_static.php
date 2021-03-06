<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1d2c30346470f17a878ed406066e234
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KDS\\MyBlog\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KDS\\MyBlog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1d2c30346470f17a878ed406066e234::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1d2c30346470f17a878ed406066e234::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1d2c30346470f17a878ed406066e234::$classMap;

        }, null, ClassLoader::class);
    }
}
