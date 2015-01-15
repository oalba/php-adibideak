<?php
require 'vendor/autoload.php';

//require 'Slim/Slim.php';
//\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/hello2/:name', function ($name) {
    // echo "Hello, $name";

    header('Content-Type: application/json');
    $data = array('name' => $name, 'surname' => 'Abizen');
	echo json_encode($data);
});


$app->run();

?>