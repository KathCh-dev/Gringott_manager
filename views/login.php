<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gringott Management</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="/style.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="?">
                    <img src="images/logo-Gringott.png" alt="Logo de la banque Gringott." width="150" height="150" class="d-inline-block align-text-top" id="logo-gringott">
                </a>
                <div class="" id="navbarNav">

            </div>
            </div>
        </nav>

        <main style="padding: 10%">
            <img src="images/Password.gif" alt="Image animée de la Grosse Dame qui demande le mot de passe.">
            <h2 class="mb-4">Vous devez vous connecter pour avoir accès aux fonctionnalités de l'application : </h2>

            <form action="?action=doLogin" method="POST">
                <div class="form-group">
                    <label>NOM et Prénom utilisateur :</label>
                    <input class="form-control" type="text" name="Admin_Name" required>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label>
                    <input class="form-control" type="password" name="Admin_Password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Se connecter</button>
                </div>
            </form>
            
        </main>
               
        <footer>
            <div class="card" style="background-color: #31353c;">
                <img src="images/Gringott-seal.png" alt="cachet en cire de Gringott" width="150" height="150" >
            </div>
        </footer>
        
    </body>

</html>