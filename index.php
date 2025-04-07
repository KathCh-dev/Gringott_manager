<?php
require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/models/repositories/clientRepository.php';

$clientRepo = new ClientRepository();

$client = new Client();
$client->lastName = 'NomDeFamille';
$client->name = 'Prénom';
$client->mail = 'mail@mail.fr';
$client->adress = 'Je vis là';
$client->phone = '0606060606';

var_dump($client);
