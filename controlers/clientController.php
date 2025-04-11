<?php

require_once __DIR__ . '/../models/repositories/clientRepository.php';
require_once __DIR__ . '/../models/client.php';

class ClientController
{
    private ClientRepository $clientRepository; //attribut ou propriété de la class ClientController qui a le type ClientRepository

    public function __construct()
    {
        $this->clientRepository = new ClientRepository();// La propriété $this->clientRepository se fait assignée le nouvel objet de type ClientRepository
    }

    public function showClients()
    {
        $clients = $this->clientRepository->getClients();
        require_once __DIR__ . '/../views/homeClients.php';
    }

    public function showClient(int $id)
    {
        $client = $this->clientRepository->getClient($id);
        require_once __DIR__ . '/../views/viewClient.php';

    }

    public function createClient()
    {
        require_once __DIR__ . '/../views/createClient.php';
    }

    public function storeClient()
    {
        $client = new Client();
        $client->setClientLastName($_POST['Client_LastName']);
        $client->setClientName($_POST['Client_Name']);
        $client->setClientAddress($_POST['Client_Address']);
        $client->setClientMail($_POST['Client_Mail']);
        $client->setClientPhone($_POST['Client_Phone']);
        $this->clientRepository->createClient($client);

        header('Location: ?action=homeClients');
        exit;
    }

    public function editClient(int $id)
    {
        $client = $this->clientRepository->getClient($id);
        require_once __DIR__ . '/../views/editClient.php';
    }

    public function updateClient()
    {
        $client = new Client();
        $client->setClientId($_POST['id']);
        $client->setClientLastName($_POST['Client_LastName']);
        $client->setClientName($_POST['Client_Name']);
        $client->setClientAddress($_POST['Client_Address']);
        $client->setClientMail($_POST['Client_Mail']);
        $client->setClientPhone($_POST['Client_Phone']);
        $this->clientRepository->updateClient($client);

        header('Location: ?action=viewClient&id=' . $client->getClientId());
        exit;
    }
    
    public function deleteClient(int $id)
    {
        $this->clientRepository->deleteClient($id);

        header('Location: ?action=homeClients');
        exit;
    }

}