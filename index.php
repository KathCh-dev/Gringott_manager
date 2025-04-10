<?php
require_once __DIR__ . '/views/templates/header.php';
require_once __DIR__ . '/controlers/clientController.php';
require_once __DIR__ . '/controlers/homeController.php';
require_once __DIR__ . '/controlers/accountController.php';

$clientController = new ClientController();
$homeController = new HomeController();
$accountController = new AccountController();

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
    case 'viewAccount':
        $accountController->showAccount($id);
        break;
    case 'createAccount':
        $accountController->createAccount();
        break;
    case 'homeAccounts':
        $accountController->showAccounts();
        break;
    case 'storeAccount':
        $accountController->storeAccount();
        break;
    case 'editAccount':
        $accountController->editAccount($id);
        break;
    case 'updateAccount':
        $accountController->updateAccount();
        break;
    case 'deleteAccount':
        $accountController->deleteAccount($id);
        break;
    default:
        $homeController->notFound();
        break;

}

require_once __DIR__ . '/views/templates/footer.php';
