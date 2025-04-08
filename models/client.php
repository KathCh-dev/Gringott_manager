<?php
require_once __DIR__ . '/../lib/database.php';

//Création de la classe modèle client
class Client
{
    private int $id;
    private string $clientName;
    private string $clientLastName;
    private string $clientMail;
    private string $clientAdress;
    private string $clientPhone;


    //Création des getters pour avoir accès aux informations privées de la classe
    public function getClientId(): int
    {
        return $this->id;
    }

    public function getClientLastName(): string
    {
        return $this->clientLastName;
    }

    public function getClientName(): string
    {
        return$this->clientName;
    }

    public function getClientMail(): string
    {
        return $this->clientMail;
    }

    public function getClientAddress(): string
    {
        return $this->clientAdress;
    }

    public function getClientPhone(): string
    {
        return $this->clientPhone;
    }

    //Création des setters pour modifier les informations dans la class client
    public function setClientId(int $id): void
    {
        $this->id = $id;
    }

    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    public function setClientLastName(string $clientLastName): void
    {
        $this->clientLastName = $clientLastName;
    }

    public function setClientMail(string $clientMail): void
    {
        $this->clientMail = $clientMail;
    }
    public function setClientAddress(string $clientAdress): void
    {
        $this->clientAdress = $clientAdress;
    }
    public function setClientPhone(string $clientPhone): void
    {
        $this->clientPhone = $clientPhone;
    }

}