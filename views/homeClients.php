<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main style="padding: 10%">
        
        <h2>📋 Liste des clients</h2>

        <br>        
        
        <table class="table table-striped table-bordered">
            <thead  class="table-dark">
                <tr>
                    <th>ID client :</th>
                    <th>Nom et prénom :</th>
                    <th>Mail :</th>
                    <th>Adresse :</th>
                    <th>Téléphone :</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach($clients as $client): ?>
                    
                    <tr>
                        <td><?= $client->getClientId(); ?></td>
                        <td><a href="?action=viewClient&id=<?= $client->getClientId() ?>"><?= $client->getClientLastName() . " " . $client->getClientName(); ?></a></td>
                        <td><?= $client->getClientMail(); ?></td>
                        <td><?= $client->getClientAddress(); ?></td>
                        <td><?= $client->getClientPhone(); ?></td>
                        <td>
                            <a href="?action=viewClient&id=<?= $client->getClientId() ?>">👀</a>
                            <a href="?action=editClient&id=<?= $client->getClientId() ?>">✏️</a>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                    
                </tbody>
            </table>

    </main>
            
</body>

<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>