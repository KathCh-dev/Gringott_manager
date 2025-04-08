

<h2>✏️ Modifier une la fiche client</h2>

<form action="?action=updateClient" method="'POST">

    <input type="hidden" name="id" value="<?= $client->getClientId() ?>">
    <div>
        <label for="lastName"><strong>Nom de famille : </strong></label><br>
        <input type="text" id="lastName" name="lastName"  value="<?= $client->getClientLastName() ?>" required>
    </div>
    <div>
        <label for="name"><strong>Prénom : </strong></label><br>
        <input type="text" id="name" name="name" value="<?= $client->getClientName() ?>" required>
    </div>
    <div>
        <label for="address"><strong>Adresse : </strong></label><br>
        <input type="text" id="address" name="address" value="<?= $client->getClientAddress() ?>">
    </div>
    <div>
        <label for="phone"><strong>Téléphone : </strong></label><br>
        <input type="text" id="phone" name="phone" value="<?= $client->getClientPhone() ?>" required>
    </div>

    <br>

    <button type="submit"> Modifier la fiche client </button><br>

</form>

<a href="?"><button>Retour à la liste</button></a><br>