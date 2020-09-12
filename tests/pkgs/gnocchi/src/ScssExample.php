<?php
namespace ScssExample;

class ScssExample
{
    public static function make(array $task)
    {
        $pkgDir = dirname(__DIR__);
        $scssCompiler = new \ScssPhp\ScssPhp\Compiler();
        $scss = 'div { .foo { hyphens: auto; } }';
        $css = $scssCompiler->compile($scss);
        $autoprefixer = new \Padaliyajay\PHPAutoprefixer\Autoprefixer($css);
        file_put_contents("$pkgDir/build.css", $autoprefixer->compile());
    }
}
