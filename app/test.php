<?php
/**
 * @author: JuanLuisGarciaBorrego
 * @date: 12/4/15 0:57
 */

require __DIR__.'/../vendor/autoload.php';


use Guzzle\Http\Client;

$client = new Client('http://localhost:8080', array(
    'request.options' => array(
        'exceptions' => false,
    )
));

// HomePage
$request = $client->get('/');
$response = $request->send();

echo "\n**********************************************\n";
echo $response;
echo "\n**********************************************\n";die;