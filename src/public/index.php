<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require '../models/Swapi.class.php';

require '../routes/vehicles.php';
require '../routes/starships.php';

$app->run();