<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17ae42e5d1fd6a2d68861ce3becac72f
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17ae42e5d1fd6a2d68861ce3becac72f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17ae42e5d1fd6a2d68861ce3becac72f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17ae42e5d1fd6a2d68861ce3becac72f::$classMap;

        }, null, ClassLoader::class);
    }
}
