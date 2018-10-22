<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb22622b123a4da828ee85cf530221fd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb22622b123a4da828ee85cf530221fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb22622b123a4da828ee85cf530221fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
