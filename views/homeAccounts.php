<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main style="padding: 10%">

        <h2>📋 Liste des comptes : </h2>

        <br>

        <table class="table table-striped table-bordered">
            <thead  class="table-dark">
                <tr>
                    <th>ID compte :</th>
                    <th>RIB :</th>
                    <th>Type de compte :</th>
                    <th>Solde Initial :</th>
                    <th>Solde actuel :</th>
                    <th>ID client :</th>
                    <th>Actions :</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($accounts as $account): ?>

                <tr>
                    <td><?= $account->getAccountId(); ?></td>
                    <td><?= $account->getAccountRib(); ?></td>
                    <td><?= $account->getAccountType(); ?></td>
                    <td><?= $account->getAccountInit(); ?></td>
                    <td><?= $account->getAccountBalance(); ?></td>
                    <td><?= $account->getClientById(); ?></td>
                    <td>
                        <a href="?action=viewAccount&id=<?= $account->getAccountId() ?>">👀</a>
                        <a href="?action=editAccount&id=<?= $account->getAccountId() ?>">✏️</a>
                    </td>
                </tr>

                <?php endforeach ?>

            </tbody>
        </table>

    </main>

</body>
<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>