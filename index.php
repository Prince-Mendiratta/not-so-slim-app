<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';

$app = AppFactory::create();
require 'src/app/page1.php';
$app->run();
