<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a0da5ddeada5824710ba05be8c604ff
{
    public static $files = array (
        'f7feab6e6e922ea62034287dbdefb882' => __DIR__ . '/../..' . '/application/epiiadmin/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wslibs\\' => 7,
        ),
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'e' => 
        array (
            'epii\\composer\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wslibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/epii/epiiadmin-lib/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'epii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/epii/epiiadmin-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a0da5ddeada5824710ba05be8c604ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a0da5ddeada5824710ba05be8c604ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
