<?php
require_once __DIR__ . '/../models/repositories/homeRepository.php';

class HomeController
{
    private HomeRepository $homeRepository;
    
    public function __construct()
    {
        $this->homeRepository = new HomeRepository();
    }

    public function home()
    {
        $totalClients = $this->homeRepository->countClients();
        extract(['total_clients' => $totalClients]);

        $totalAccounts = $this->homeRepository->countAccounts();
        extract(['total_accounts' => $totalAccounts]);

        $totalContracts = $this->homeRepository->countContracts();
        extract(['total_contracts' => $totalContracts]);
        
        require_once __DIR__ . '/../views/viewHome.php';
   
    }
    
    public function notFound()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }

}
