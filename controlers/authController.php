<?php

require_once __DIR__ . '/../models/repositories/adminRepository.php';
require_once __DIR__ .'/../models/admin.php';

class AuthController
{
    private AdminRepository $adminRepository;

    public function __construct()
    {
        $this->adminRepository = new AdminRepository();
    }

    public function login()
    {
        require_once __DIR__ . '/../views/login.php';
    }

    public function doLogin()
    {
        $adminName = filter_input(INPUT_POST, 'Admin_Name');
        $adminPassword = filter_input(INPUT_POST, 'Admin_Password');

        $admin = $this->adminRepository->getAdminByName($adminName);

        if(!$admin)
        {

        }

        if($admin && password_verify($adminPassword, $admin->getAdminPassword()))
        {
            $_SESSION['Admin_ID'] = $admin->getAdminId();
        }

        header('Location: ?action=viewHome');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: ?action=login');
        exit;
    }
}