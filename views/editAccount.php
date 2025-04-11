<?php require_once __DIR__ . '/templates/header.php'; ?>

<body>
    
    <main style="padding: 10%">

        <h2>✏️ Modifier une la fiche du compte</h2>

        <br>
        
        <form action="?action=updateAccount" method="POST">
            
            <input type="hidden" name="Account_ID" value="<?= $account->getAccountId() ?>">

            <div class="mb-3">
                <label for="RIB" class="form-label"><strong>RIB: </strong></label><br>
                <input type="text" class="form-control" id="RIB" name="RIB"  value="<?= $account->getAccountRib() ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Account_Type" class="form-label"><strong>Type de compte : </strong></label><br>
                <select type="text" class="form-control" id="Account_Type" name="Account_Type" value="<?= $account->getAccountType() ?>">
                    <option value="Compte_Courant">Compte courant</option>
                    <option value="Compte_Epargne">Compte épargne</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Account_Init" class="form-label"><strong>Solde initial : </strong></label><br>
                    <input type="text" class="form-control" id="Account_Init" name="Account_Init" value="<?= $account->getAccountInit() ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Account_Balance" class="form-label"><strong>Solde actuel : </strong></label><br>
                    <input type="text" class="form-control" id="Account_Balance" name="Account_Balance" value="<?= $account->getAccountBalance() ?>" required>
            </div>
                <label for="Client_ID" class="form-label"><strong>ID client : </strong></label><br>
                    <input type="text" class="form-control" id="Client_ID" name="Client_ID" value="<?= $account->getClientById() ?>" readonly>
            </div>
                
                <br>
                
                <button type="submit" class="btn btn-success"> Modifier la fiche du compte </button><br>
                
            </form>
            <br>
            
        <a href="?action=homeAccounts"><button class="btn btn-danger">Retour à la liste des comptes</button></a><br>

    </main>

</body>

<?php require_once __DIR__ . '/templates/footer.php'; ?>