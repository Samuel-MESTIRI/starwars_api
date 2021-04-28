<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$vehicles = new Swapi();
$payload = $vehicles->get_vehicles();


$app->get('/vehicles', function (Request $request, Response $response, $args) use($payload) {
  $response->getBody()->write($payload);
  return $response
    ->withHeader('Content-Type', 'application/json')
    ->withHeader('Access-Control-Allow-Origin', 'http://localhost:8080');
});