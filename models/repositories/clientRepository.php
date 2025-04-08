<?php

require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ . '/../client.php';

//Création de la classe
class ClientRepository
{
    public DatabaseConnection $connection;

    //création du construct
    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    //Récupération de la totalité des données client et affichage sous forme de tableau 
    public function getClients(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM clients');
        $result = $statement->fetchAll();
        $clients = [];

    

        foreach($result as $row){
            $client = new Client();
            $client->setClientId($row['Client_ID']);
            $client->setClientLastName($row['Client_LastName']);
            $client->setClientName($row['Client_Name']);
            $client->setClientMail($row['Client_Mail']);
            $client->setClientAddress($row['Client_Adress']);
            $client->setClientPhone($row['Client_Phone']);
            $clients[] = $client;
        }

        return $clients;
    }

    //Récupération des données d'un client et affichage sous forme de tableau
    public function getClient(int $id): ?Client
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM clients WHERE client_Id=:id');
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if(!$result){
            return null;
        }

        $client = new Client();
        $client->setClientId($result['Client_ID']);
        $client->setClientLastName($result['Client_LastName']);
        $client->setClientName($result['Client_Name']);
        $client->setClientMail($result['Client_Mail']);
        $client->setClientAddress($result['Client_Adress']);
        $client->setClientPhone($result['Client_Phone']);
        return $client;
    }

    //Création du CRUD client
    //Création d'un client
    public function createClient(Client $client): bool{
        $statement = $this->connection->getConnection()->prepare('INSERT INTO clients (lastName ,name, mail, address, phone)');

        return $statement->execute([
            'lastName' => $client->getClientLastName(),
            'name' => $client->getClientName(),
            'mail' => $client->getClientMail(),
            'address' => $client->getClientAddress(),
            'phone' => $client->getClientPhone()
        ]);
    }

    //Mise à jour des informations d'un client
    public function updateClient(Client $client): bool
    {
        $statement = $this->connection->getConnection()->prepare('UPDATE clients SET lastName = :lastName, name = :name, mail = :mail, address = :address, phone = :phone WERE id = :id');

        return $statement->execute([
            'id' => $client->getClientId(),
            'lastName' => $client->getClientLastName(),
            'name' => $client->getClientName(),
            'mail' => $client->getClientMail(),
            'address' => $client->getClientAddress(),
            'phone' => $client->getClientPhone(),
        ]);
    }

    //Effacement des données d'un client
    public function deleteClient(int $id): bool
    {
        $statement = $this->connection->getConnection()->prepare('DELETE FROM Clients WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }

}