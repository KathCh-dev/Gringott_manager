<?php require_once __DIR__ . '/templates/header.php'; ?>

<body>
    <main style="padding:10%">
        <h2>⊕ Créer un nouveau compte</h2>

        <br>
        <form action="?action=storeAccount" method="POST">
            
            <div class="mb-3">
                <label for="RIB" class="form-label"><strong>RIB (type 11111 11111 11111111111 11) : </strong></label><br>
                <input type="text" class="form-control" id="RIB" name="RIB" required>
            </div>
            <div class="mb-3">
                <label for="Account_Type" class="form-label"><strong>Type de compte : </strong></label><br>
                <select type="text" class="form-control" id="Account_Type" name="Account_Type">
                    <option value="Compte_Courant">Compte courant</option>
                    <option value="Compte_Epargne">Compte épargne</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Account_Init" class="form-label"><strong>Montant du dépôt initial : </strong></label><br>
                <input type="text" class="form-control" id="Account_Init" name="Account_Init" required>
            </div>
            <div class="mb-3">
                <label for="Account_Balance" class="form-label"><strong>Montant du solde actuel : </strong></label><br>
                <input type="text" class="form-control" id="Account_Balance" name="Account_Balance">
            </div>
            <div class="mb-3">
                <label for="Client_ID" class="form-label"><strong>ID du client propriétaire : </strong></label><br>
                <input type="text" class="form-control" id="Client_ID" name="Client_ID" required>
            </div>
            
            <br>
            
            <button type="submit" class="btn btn-success"> Ajouter </button><br>
            
        </form>
        <br>

        <a href="?action=homeClients"><button class="btn btn-primary">Retour à la liste clients</button></a><br>
        <br>
        <a href="?"><button class="btn btn-warning">Retour à l'accueil</button></a><br>
        <br>

    </main>
</body>

<?php require_once __DIR__ . '/templates/footer.php'; ?>