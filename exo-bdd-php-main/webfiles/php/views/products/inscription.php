<?php

require_once('../header.php');?>
   <h1>Inscription</h1>
    <form method="POST" action="../../actions/user/scriptInscription.php">
        <input type="email" name="ml" placeholder="Votre email" required>
        <input type="password" name="mdp" placeholder="Votre mot de passe" required>
        <button type="submit">Inscription</button>
    </form>
<?php ?>