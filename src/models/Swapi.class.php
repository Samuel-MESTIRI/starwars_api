<?php

class Swapi { 
  public $client;

  function __construct() {
    $this->client = new GuzzleHttp\Client(['verify' => false, 'base_uri' => 'https://swapi.dev/api/']);
  }

  public function get_vehicles() {

    $vehicles = $this->client->request('GET', 'vehicles');
    return $vehicles->getBody()->getContents();
  }

  public function get_starships() {

    $starships = $this->client->request('GET', 'starships');
    return $starships->getBody()->getContents();
  }
}
