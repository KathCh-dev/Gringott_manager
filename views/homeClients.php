<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main style="padding: 10%">
        
        <h2>📋 Liste des clients</h2>
        
        
        <table>
            <thead>
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
                        <td><a href=""><?= $client->getClientLastName() . " " . $client->getClientName(); ?></a></td>
                        <td><?= $client->getClientMail(); ?></td>
                        <td><?= $client->getClientAddress(); ?></td>
                        <td><?= $client->getClientPhone(); ?></td>
                        <td>
                            <a href="">👀</a>
                            <a href="">✏️</a>
                            <a href="">❌</a>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                    
                </tbody>
            </table>

    </main>
            
</body>

<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>