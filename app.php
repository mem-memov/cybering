<?php
require 'vendor/autoload.php';
require 'cybe.php';

$app = new \Slim\App();
require 'routs.php';
$app->run();
