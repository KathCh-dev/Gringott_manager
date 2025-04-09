<?php require_once __DIR__ . '/templates/header.php';?>

<body>
    
    <main style="padding: 10%">

        <h2> 📋 Liste récapitulative de votre portfeuille clientèle : </h2><br>
        
        <table>
            <thead>
                <tr>
                    <th>Nombre de clients inscrits :</th>
                    <th>Nombre de comptes ouverts :</th>
                    <th>Nombre de contrat souscrits :</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    
                    <td><?= $totalClients; ?></td>
                    <td><?= $totalAccounts; ?></td>
                    <td><?= $totalContracts; ?></td>
                    
                </tr>
                
            </tbody>
        </table>
        
    </main>

</body>

<?php require_once __DIR__ . '/templates/footer.php';?>