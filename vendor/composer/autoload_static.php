<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad1a00254a1be63799cb59131dfda006
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stephanie\\PackageCowsay\\' => 24,
        ),
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stephanie\\PackageCowsay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad1a00254a1be63799cb59131dfda006::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad1a00254a1be63799cb59131dfda006::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad1a00254a1be63799cb59131dfda006::$classMap;

        }, null, ClassLoader::class);
    }
}
