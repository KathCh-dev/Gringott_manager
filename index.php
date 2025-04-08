<?php
require_once __DIR__ . '/views/templates/header.php';
require_once __DIR__ . '/controlers/clientController.php';
require_once __DIR__ . '/controlers/homeController.php';

$clientController = new ClientController();
$homeController = new HomeController();

$action = $_GET['action'] ?? 'viewHome';
$id = $_GET['id'] ?? null;

switch($action){
    case 'viewHome':
        $homeController->home();
        break;
    case 'viewClient':
        $clientController->showClient($id);
        break;
    case 'createClient':
        $clientController->createClient();
        break;
    case 'homeClients':
        $clientController->showClients();
        break;
    case 'storeClient':
        $clientController->storeClient();
        break;
    case 'editClient':
        $clientController->editClient($id);
        break;
    case 'updateClient':
        $clientController->updateClient();
        break;
    case 'deleteClient':
        $clientController->deleteClient($id);
        break;
    default:
        $homeController->notFound();
        break;
    
}

require_once __DIR__ . '/views/templates/footer.php';
