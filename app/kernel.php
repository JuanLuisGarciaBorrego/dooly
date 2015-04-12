<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 11/4/15 22:51
 */

use Silex\Application;
use Silex\Provider\UrlGeneratorServiceProvider;

class DoolyApplication extends Application
{
    use Application\UrlGeneratorTrait;
}

$app = new DoolyApplication();

/*
 * Services Providers
 */

$app->register(new UrlGeneratorServiceProvider());

/*
 * Main Routes
 * $app->mount('path', new Controller\Class($app))
 */

$app->mount('/', new Controller\DefaultController($app));