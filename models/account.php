<?php
require_once __DIR__ . '/../lib/database.php';

//Création de la classe modèle compte
class Account
{
   private int $id;
   private string $accountRib;
   private string $accountType;
   private float $accountInit;
   private float $accountBalance;
   private int $clientId;

   //Création des getters pour avoir accès aux informations privées de la classe
   public function getAccountId(): int
   {
        return $this->id;
   }

   public function getClientById(): int
   {
        return $this->clientId;
   }

   public function getAccountRib(): string
   {
        return $this->accountRib;
   }

   public function getAccountType(): string
   {
        return $this->accountType;
   }

   public function getAccountInit(): float
   {
        return $this->accountInit;
   }

   public function getAccountBalance(): float
   {
        return $this->accountBalance;
   }

   //Création des setters pour modifier les informations dans la class account
   public function setAccountId(int $id): void
   {
        $this->id = $id;
   }
   public function setClientId(int $clientId): void
   {
        $this->clientId = $clientId;
   }

   public function setAccountRib(string $accountRib)
   {
        $this->accountRib = htmlspecialchars($accountRib);
   }

   public function setAccountType(string $accountType)
   {
        $this->accountType = htmlspecialchars($accountType);
   }

   public function setAccountInit(float $accountInit)
   {
        $this->accountInit = $accountInit;
   }

   public function setAccountBalance(float $accountBalance)
   {
        $this->accountBalance = $accountBalance;
   }
}


