<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 12/4/15 0:30
 */

namespace Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

abstract class BaseController implements ControllerProviderInterface{

    protected $container;

    public function __construct(Application $app)
    {
        $this->container = $app;
    }

    abstract protected function addRoutes(ControllerCollection $controller);

    public function connect(Application $container)
    {
        $controllers = $this->container['controllers_factory'];

        $this->addRoutes($controllers);

        return $controllers;
    }

}