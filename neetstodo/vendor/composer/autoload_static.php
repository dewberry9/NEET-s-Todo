<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf80e0d69e3d7daa27846708c14a96821
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf80e0d69e3d7daa27846708c14a96821::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf80e0d69e3d7daa27846708c14a96821::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
