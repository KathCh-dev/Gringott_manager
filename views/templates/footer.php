<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gringott Management</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <footer>
        <div class="card container-fluid" style="background-color: #31353c;">
            <img src="images/Gringott-seal.png" alt="cachet en cire de Gringott" width="150" height="150" >
            
            <ul class="nav justify-content-end">
                <?php if(isset($_SESSION['Admin_ID'])): ?>
                    <li class="nav-item">
                    <a class="nav-link" href="?action=logout">Déconnexion</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=login">Connexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </footer>

</html>
