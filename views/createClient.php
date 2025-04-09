<?php require_once __DIR__ . '/../views/templates/header.php'; ?>

<body>

    <main  style="padding: 10%">
        <h2>⊕ Créer une nouvelle fiche client</h2>

        <br>
        
        <form action="?action=storeClient" method="POST">
            
            <div class="mb-3">
                <label for="Client_LastName" class="form-label"><strong>Nom de famille : </strong></label><br>
                <input type="text" class="form-control" id="Client_LastName" name="Client_LastName" required>
            </div>
            <div class="mb-3">
                <label for="Client_Name" class="form-label"><strong>Prénom : </strong></label><br>
                <input type="text" class="form-control" id="Client_Name" name="Client_Name" required>
            </div>
            <div class="mb-3">
                <label for="Client_Mail" class="form-label"><strong>Mail : </strong></label><br>
                <input type="text" class="form-control" id="Client_Mail" name="Client_Mail">
            </div>
            <div class="mb-3">
                <label for="Client_Address" class="form-label"><strong>Adresse : </strong></label><br>
                <input type="text" class="form-control" id="Client_Address" name="Client_Address">
            </div>
            <div class="mb-3">
                <label for="Client_Phone" class="form-label"><strong>Téléphone : </strong></label><br>
                <input type="text" class="form-control" id="Client_Phone" name="Client_Phone" required>
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

<?php require_once __DIR__ . '/../views/templates/footer.php'; ?>