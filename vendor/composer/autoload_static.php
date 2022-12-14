<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96bb424783407c11ddce64e5803da305
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit96bb424783407c11ddce64e5803da305::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96bb424783407c11ddce64e5803da305::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96bb424783407c11ddce64e5803da305::$classMap;

        }, null, ClassLoader::class);
    }
}
