<?php

require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ . '/../account.php';
require_once __DIR__ . '/../client.php';

//Création de la classe
class AccountRepository
{
    public DatabaseConnection $connection;

    //création du construct
    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    //Récupératio de la totalité des données compte et affichage sous forme de tableau
    public function getAccounts(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM accounts');
        $result = $statement->fetchAll();
        $accounts = [];

        foreach($result as $row){
            $account = new Account();
            $account->setAccountId($row['Account_ID']);
            $account->setAccountRib($row['RIB']);
            $account->setAccountType($row['Account_Type']);
            $account->setAccountInit($row['Account_Init']);
            $account->setAccountBalance($row['Account_Balance']);
            $account->setClientId($row['Client_ID']);
            $accounts[] = $account;
        }

        return $accounts;
    }

    //Récupération des données d'un compte et affichage sous forme de tableau
    public function getAccount(int $id): ?Account 
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM accounts WHERE Account_ID=:Account_ID');
        $statement->execute(['Account_ID' => $id]);
        $result = $statement->fetch();

        if(!$result){
            return null;
        }

        $account = new Account();
        $account->setAccountId($result['Account_ID']);
        $account->setAccountRib($result['RIB']);
        $account->setAccountType($result['Account_Type']);
        $account->setAccountInit($result['Account_Init']);
        $account->setAccountBalance($result['Account_Balance']);
        $account->setClientId($result['Client_ID']);
        return $account;
    }

    public function getAccountByClientId(int $clientId)
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM accounts WHERE Client_ID=:Client_ID');
        $statement->execute(['Client_ID' =>$clientId]);
        $result = $statement->fetchAll();
        $accounts = [];

        foreach($result as $row){
            $account = new Account();
            $account->setAccountId($row['Account_ID']);
            $account->setAccountRib($row['RIB']);
            $account->setAccountType($row['Account_Type']);
            $account->setAccountInit($row['Account_Init']);
            $account->setAccountBalance($row['Account_Balance']);
            $account->setClientId($row['Client_ID']);
            $accounts[] = $account;
        }
        return $accounts;
    }

    //Création du CRUD compte
    //Création d'un compte
    public function createAccount(Account $account): bool
    {
        $statement = $this->connection->getConnection()->prepare('INSERT INTO accounts (RIB, Account_Type, Account_Init, Account_Balance, Client_ID) VALUES (:RIB, :Account_Type, :Account_Init, :Account_Balance, :Client_ID)');

        return $statement->execute([
            'RIB' => $account->getAccountRib(),
            'Account_Type' => $account->getAccountType(),
            'Account_Init' => $account->getAccountInit(),
            'Account_Balance' => $account->getAccountBalance(),
            'Client_ID' => $account->getClientById()
        ]);
    }

    //Mise à jour des informations de compte
    public function updateAccount(Account $account): bool
    {
        $statement = $this->connection->getConnection()->prepare('UPDATE accounts SET RIB = :RIB, Account_Type = :Account_Type, Account_Init = :Account_Init, Account_Balance = :Account_Balance, Client_ID = :Client_ID WHERE Account_ID = :Account_ID');

        return $statement->execute([
            'Account_ID' => $account->getAccountId(),
            'RIB' => $account->getAccountRib(),
            'Account_Type' => $account->getAccountType(),
            'Account_Init' => $account->getAccountInit(),
            'Account_Balance' => $account->getAccountBalance(),
            'Client_ID' => $account->getClientById()
        ]);
    }

    //Effecement des données de compte
    public function deleteAccount(int $id): bool
    {
        $statement = $this->connection->getConnection()->prepare('DELETE FROM accounts WHERE Account_ID = :Account_ID');
        $statement->bindParam(':Account_ID', $id);

        return $statement->execute();
    }
    
}