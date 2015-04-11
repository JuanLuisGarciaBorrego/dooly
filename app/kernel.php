<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 11/4/15 22:51
 */

use Silex\Application;

$app = new Application();

/*
 * Main Routes
 * $app->mount('path', new Controller\Class($app))
 */

$app->mount('/', new Controller\DefaultController($app));