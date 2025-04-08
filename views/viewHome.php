<?php require_once __DIR__ . '/templates/header.php';?>

<h2> 📋 Liste récapitulative de votre portfeuille clientèle : </h2>

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

<?php require_once __DIR__ . '/templates/footer.php';?>