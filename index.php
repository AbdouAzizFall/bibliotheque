<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des etudiants</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php 
    require_once('connexion.php');
    require_once('header.php');
    require_once('pages\listeLivres.php');

    if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'admin':
                require_once('pages\gesAdmin.php');
                break;
            case 'livre':
                require_once('pages\gesLivres.php');
                break;
            case 'emprunt':
                require_once('pages\gesEmprunts.php');
                break; 
            case 'client':
                require_once('pages\gesClients.php');
                break;
            case 'rapport':
                require_once('pages\rapport.php');
                break;               
            case 'deconn':
                require_once('auth\deconn.php');
                break; 
            case 'ajout':
                require_once('traitement\ajout.php');
                break;  
                    
        }
    }
    

    ?>
</body>
</html>