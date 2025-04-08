<?php

require_once __DIR__ . '/../../lib/database.php';

class HomeRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    //Compter le nombre de clients dans la base de données
    public function countClients(): int
    {
        $statement = $this->connection->getConnection()->query('SELECT COUNT(Client_ID) as total_clients FROM clients');
        $result = $statement->fetch();
            return $result['total_clients'];
    }

    public function countAccounts(): int
    {
        $statement = $this->connection->getConnection()->query('SELECT COUNT(Account_ID) as total_accounts FROM accounts');
        $result = $statement->fetch();
            return $result['total_accounts'];
    }

    public function countContracts(): int
    {
        $statement = $this->connection->getConnection()->query('SELECT COUNT(Contract_ID) as total_contracts FROM contracts');
        $result = $statement->fetch();
            return $result['total_contracts'];
    }
    
}