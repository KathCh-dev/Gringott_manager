

<h2>⊕ Créer une nouvelle fiche client</h2>

<form action="?action=storeClient" method="'POST">

    <div>
        <label for="lastName"><strong>Nom de famille : </strong></label><br>
        <input type="text" id="lastName" name="lastName" required>
    </div>
    <div>
        <label for="name"><strong>Prénom : </strong></label><br>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="address"><strong>Adresse : </strong></label><br>
        <input type="text" id="address" name="address">
    </div>
    <div>
        <label for="phone"><strong>Téléphone : </strong></label><br>
        <input type="text" id="phone" name="phone" required>
    </div>

    <br>

    <button type="submit"> Ajouter </button><br>

</form>

<a href="?"><button>Retour à la liste</button></a><br>