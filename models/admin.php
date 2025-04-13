<?php

class Administrator
{
   private int $adminId;
   private string $adminName;
   private string $adminMail;
   private string $adminPassword;

   public function __construct($adminId, $adminName, $adminMail, $password)
   {
      $this->adminId = $adminId;
      $this->adminName = $adminName;
      $this->adminMail = $adminMail;
      $this->adminPassword = $password;
   }

   public function getAdminId(): int
   {
      return $this->adminId;
   }

   public function getAdminName(): string
   {
      return $this->adminName;
   }

   public function getAdminMail(): string
   {
      return $this->adminMail;
   }

   public function getAdminPassword(): string
   {
      return $this->adminPassword;
   }

   public function setAdminId(int $adminId): void
   {
      $this->adminId = $adminId;
   }

   public function setAdminName(string $adminName): void
   {
      $this->adminName = htmlspecialchars($adminName);
   }

   public function setAdminMail(string $adminMail): void
   {
      $this->adminMail = htmlspecialchars($adminMail);
   }

   public function setAdminPassword(string $adminPassword): void
   {
      $this->adminPassword = htmlspecialchars($adminPassword);
   }

}