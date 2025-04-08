

<h2> 📋 Détail de la fiche client </h2>

<p><strong> Nom complet : </strong> <br> <?= $client->getClientLastName() . " " . $client->getClientName() ?></p>
<p><strong> Adresse : </strong> <br> <?= $client->getClientAddress() ?></p>
<p><strong> Mail : </strong> <br> <?= $client->getClientMail() ?></p>
<p><strong> Téléphone : </strong> <br> <?= $client->getClientPhone() ?></p>

<br>

<p><strong> Actions :</strong> <br> </p>
✏️ Modifier <br>
<br>
❌ Supprimer <br>


