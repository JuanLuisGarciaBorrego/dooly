<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 12/4/15 1:17
 */

namespace Tests;

use Guzzle\Http\Client;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testHomeAction()
    {
        $client = new Client('http://localhost:8080', array(
            'request.options' => array(
                'exceptions' => false,
            )
        ));

        $request = $client->get('/');
        $response = $request->send();

        $this->assertEquals(200, $response->getStatusCode());
    }
} 