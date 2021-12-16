<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dec030d52881bf830da680a7448ac80
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Michelf\\Markdown' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/Markdown.php',
        'Michelf\\MarkdownExtra' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownExtra.php',
        'Michelf\\MarkdownInterface' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dec030d52881bf830da680a7448ac80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dec030d52881bf830da680a7448ac80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dec030d52881bf830da680a7448ac80::$classMap;

        }, null, ClassLoader::class);
    }
}
