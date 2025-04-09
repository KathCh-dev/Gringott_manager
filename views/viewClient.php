<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main style="padding: 10%">

        <h2> 📋 Détail de la fiche client </h2>
        
        <p><strong> Nom complet : </strong> <br> <?= $client->getClientLastName() . " " . $client->getClientName() ?></p>
        <p><strong> Adresse : </strong> <br> <?= $client->getClientAddress() ?></p>
        <p><strong> Mail : </strong> <br> <?= $client->getClientMail() ?></p>
        <p><strong> Téléphone : </strong> <br> <?= $client->getClientPhone() ?></p>
        
        <br>
        
        <p><strong> Actions :</strong> <br> </p>
        ✏️ Modifier <br>
        <br>
        ❌ Supprimer <br>

    </main>
    
</body>

<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>