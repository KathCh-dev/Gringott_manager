<?php require_once __DIR__ . '/templates/header.php'; ?>

<body>

    <main style="padding: 10%">

        <h2>📋 Détail du compte</h2>
        
        <br>
        
        <p><strong>ID : </strong> <?= $account->getAccountId() ?></p>
        <p><strong>RIB : </strong> <?= $account->getAccountRib() ?></p>
        <p><strong>Type de compte : </strong> <?= $account->getAccountType() ?></p>
        <p><strong>Montant initial : </strong> <?= $account->getAccountInit() ?></p>
        <p><strong>Solde : </strong> <?= $account->getAccountBalance() ?></p>
        <p><strong>ID client : </strong> <?= $account->getClientById() ?></p>
        
            <a href="?action=editAccount&id=<?= $account->getAccountId() ?>"><button type="button" class="btn btn-success">✏️ Modifier le compte</button></a>
            
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ? Cette action est irréversible.');" href="?action=deleteAccount&id= <?= $account->getAccountId() ?>"><button class="btn btn-dark">❌ Supprimer le compte</button></a>

            <a href="?action=homeAccounts"><button class="btn btn-danger">Retour à la liste des comptes</button></a>
            
            <a href="?action=homeClients"><button class="btn btn-primary">Retour à la liste des clients</button></a>
            
            <a href="?"><button class="btn btn-warning">Retour à l'accueil</button></a><br>
            <br>
            
    </main>
            
</body>

<?php require_once __DIR__ . '/templates/footer.php'; ?>