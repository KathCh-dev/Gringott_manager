<?php

require_once __DIR__ . '/../models/repositories/accountRepository.php';
require_once __DIR__ . '/../models/account.php';

class AccountController
{
    private AccountRepository $accountRepository;

    public function __construct()
    {
        $this->accountRepository = new AccountRepository();
    }

    public function showAccounts()
    {
        $accounts = $this->accountRepository->getAccounts();
        require_once __DIR__ . '/../views/homeAccounts.php';
    }

    public function showAccount(int $id)
    {
        $account = $this->accountRepository->getAccount($id);
        require_once __DIR__ . '/../views/viewAccount.php';
    }

    public function createAccount()
    {
        require_once __DIR__ . '../views/createAccount.php';
    }

    public function storeAccount()
    {
        $account = new Account();
        $account->setAccountRib($_POST['RIB']);
        $account->setAccountType($_POST['Account_Type']);
        $account->setAccountInit($_POST['Account_Init']);
        $account->setAccountBalance($_POST['Account_Balance']);

        header('Location: ?action=viewClient&id=' . $account->getClientId());
        exit;
    }

    public function editAccount(int $id)
    {
        $account = $this->accountRepository->getAccount($id);
        require_once __DIR__ . '/../views/editAccount.php';
    }

    public function updateAccount()
    {
        $account = new Account();
        $account->setAccountId($_POST['id']);
        $account->setAccountRib($_POST['RIB']);
        $account->setAccountType($_POST['Account_Type']);
        $account->setAccountInit($_POST['Account_Init']);
        $account->setAccountBalance($_POST['Account_Balance']);
        
        header('Location: ?action=viewClient&id=' . $account->getClientId());
        exit;
    }

    public function deleteAccount(int $id)
    {
        $this->accountRepository->deleteAccount($id);

        header('Location: ?action=homeAccounts');
        exit;
    }
}