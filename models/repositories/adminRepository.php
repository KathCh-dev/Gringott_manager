<?php

require_once __DIR__ . '/../admin.php';
require_once __DIR__ . '/../../lib/database.php';

class AdminRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getAdminByName(string $adminName): ?Administrator
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM administrator WHERE Admin_Name = :Admin_Name");
        $statement->execute(['Admin_Name' => $adminName]);
        $result = $statement->fetch();

        if (!$result){
            return null;
        }

        $admin = new Administrator($result['Admin_ID'], $result['Admin_Name'], $result['Admin_Mail'], $result['Admin_Password']);
        
        return $admin;
    }
}