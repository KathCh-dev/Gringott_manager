<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main style="padding: 10%">

        <h2> 📋 Détail de la fiche client </h2>
    
        <br>        
        
        <p><strong> Nom complet : </strong> <br> <?= $client->getClientLastName() . " " . $client->getClientName() ?></p>
        <p><strong> Adresse : </strong> <br> <?= $client->getClientAddress() ?></p>
        <p><strong> Mail : </strong> <br> <?= $client->getClientMail() ?></p>
        <p><strong> Téléphone : </strong> <br> <?= $client->getClientPhone() ?></p>
        
        <br>
        
        <p><strong> Actions :</strong> <br> </p>
        <a href="?action=editClient&id=<?= $client->getClientId() ?>"><button type="button" class="btn btn-success">✏️ Modifier</button></a>
        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ? Cette action est irréversible.');" href="?action=deleteClient&id=<?= $client->getClientId() ?>"><button class="btn btn-dark">❌ Supprimer </button></a>
        <a href="?action=homeClients"><button class="btn btn-primary">Retour à la liste clients</button></a>
        <a href="?"><button class="btn btn-warning">Retour à l'accueil</button></a><br>
        <br>

    </main>
    
</body>

<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>