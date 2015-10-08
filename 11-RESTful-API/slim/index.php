<?php
require 'vendor/autoload.php';

//require 'Slim/Slim.php';
//\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->config('debug', false);


$app->get('/', function () {
    echo "Use: http://server/index.php/";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/hello2/:name', function ($name) {
    // echo "Hello, $name";

    $data = array('name' => $name, 'surname' => 'Abizen');

    header('Content-Type: application/json');
	echo json_encode($data);
});

$app->get('/archive(/:year(/:month(/:day)))', function ($year = 2010, $month = 12, $day = 05) {
    echo sprintf('%s-%s-%s', $year, $month, $day);
});

//POST variable
// http://php.net/manual/en/functions.anonymous.php
$app->post('/user/add', function () use ($app) {
	$username = $app->request->post('username'); 
    echo "HTTP post, username: $username";

});

$app->run();

?>