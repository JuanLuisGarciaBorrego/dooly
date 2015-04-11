<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 11/4/15 23:20
 */

namespace Controller;

use Silex\ControllerCollection;

class DefaultController extends BaseController
{
    protected function addRoutes(ControllerCollection $controller)
    {
        $controller->get('/', array($this, 'homeAction'));
    }

    public function homeAction()
    {
        return $this->container->json('Hello Sally');
    }
}