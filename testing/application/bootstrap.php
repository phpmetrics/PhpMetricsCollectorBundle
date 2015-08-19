<?php
require_once __DIR__ . '/../../vendor/autoload.php';
$vendorDir = __DIR__.'/../../vendor';
use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'          => array(__DIR__.'/../vendor/symfony/src', __DIR__.'/../vendor/bundles'),
    'Sensio'           => __DIR__.'/../vendor/bundles',
    'JMS'              => __DIR__.'/../vendor/bundles',
    'Monolog'          => __DIR__.'/../vendor/monolog/src',
    'Assetic'          => __DIR__.'/../vendor/assetic/src',
    'Metadata'         => __DIR__.'/../vendor/metadata/src',
    'My'               => __DIR__.'/src',
    'Hal\\Bundle\\PhpMetricsCollector'               => __DIR__.'/../src',
));
$loader->register();
spl_autoload_register(function($class) {
    $class = ltrim($class, '\\');
    if (0 === strpos($class, 'Hal\Bundle\PhpMetricsCollector\\')) {
        $file = __DIR__.'/../'.str_replace('\\', '/', substr($class, strlen('Hal\Bundle\PhpMetricsCollector\\'))).'.php';
        if (file_exists($file)) {
            require $file;
        }
    }

    if (0 === strpos($class, 'My\\')) {
        $file = __DIR__.'/src/My/'.str_replace('\\', '/', substr($class, strlen('My\\'))).'.php';
        var_dump($file);
        if (file_exists($file)) {
            require $file;
        }
    }
});