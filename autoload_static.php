<?php

namespace Composer\Autoload;

class ComposerStaticInit82d24d8ae36365c109cb72628b8c7644
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \clusore::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82d24d8ae36365c109cb72628b8c7644::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82d24d8ae36365c109cb72628b8c7644::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
