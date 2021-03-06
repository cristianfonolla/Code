<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f608d7adce846dae168422456d7a370
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cristianfonolla\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cristianfonolla\\' => 
        array (
            0 => __DIR__ . '/..' . '/cristianfonolla/hello-world-package/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f608d7adce846dae168422456d7a370::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f608d7adce846dae168422456d7a370::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
