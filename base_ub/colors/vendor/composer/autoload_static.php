<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f02e5bccb1e7c4eec1459fef8f3c6ba
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5f02e5bccb1e7c4eec1459fef8f3c6ba::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
