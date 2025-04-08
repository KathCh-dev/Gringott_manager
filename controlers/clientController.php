<?php

require_once __DIR__ . '/../models/repositories/clientRepository.php';
require_once __DIR__ . '/../models/client.php';

class ClientController
{
    private ClientRepository $clientRepository;

    public function __construct()
    {
        $this->clientRepository = new ClientRepository();
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
        $client->setClientLastName($_POST['lastName']);
        $client->setClientName($_POST['name']);
        $client->setClientAddress($_POST['address']);
        $client->setClientMail($_POST['mail']);
        $client->getClientPhone()($_POST['phone']);
        $this->clientRepository->createClient($client);

        header('Location: ?');
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
        $client->setClientLastName($_POST['lastName']);
        $client->setClientName($_POST['name']);
        $client->setClientAddress($_POST['address']);
        $client->setClientMail($_POST['mail']);
        $client->getClientPhone()($_POST['phone']);
        $this->clientRepository->updateClient($client);
    }
    
    public function deleteClient(int $id)
    {
        $this->clientRepository->deleteClient($id);

        header('Location: ?');
        exit;
    }

}