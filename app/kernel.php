<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 11/4/15 22:51
 */

use Silex\Application;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\DoctrineServiceProvider;

class DoolyApplication extends Application
{
    use Application\UrlGeneratorTrait;
}

$app = new DoolyApplication();

/*
 * Services Providers
 */

$app->register(new UrlGeneratorServiceProvider());
$app->register(new DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'MY_DATABASE',
        'user'      => 'MY_USERNAME',
        'password'  => 'MY_PASSWORD',
        'charset'   => 'utf8'
    )
));

/*
 * Main Routes
 * $app->mount('path', new Controller\Class($app))
 */

$app->mount('/', new Controller\DefaultController($app));