<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Amazoone pour mes stagiaires de Soissons</title>
    <meta name="description" content="TP Amazoone pour mes stagiaires de Soissons">
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<?php 
    session_start();
?>
<body>
<header>
        <nav>
            <p class="logo">Amazoone</p>
            <ul>
                <li><a href="#">Flash</a></li>
                <li><a href="#">Basics</a></li>
                <li><a href="#">Cart. cadeaux</a></li>
                <li><a href="#">Coupons</a></li>
                <li><a href="#">Nouveau</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Beauté</a></li>
                <li><a href="./inscription.php">Inscription</a></li>
                <?php if(!empty($_SESSION) && $_SESSION["connected"] === TRUE){?>
                <li><a href="../login.php">Deconnexion</a></li>
                <?php }else{?>
                    <li><a href="../login.php">Connexion</a></li>
                <?php }?>
            </ul>
        </nav>