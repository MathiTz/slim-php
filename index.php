<?php

require "vendor/autoload.php";
use \Slim\App;

$app = new App();

$app->get('/', function(){
    echo json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->run();

?>