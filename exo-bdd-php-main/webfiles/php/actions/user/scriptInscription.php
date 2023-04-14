<?php 
     require_once("../dbconnect.php");   

     if(!empty($conn)){
          $mail = $_POST["ml"];
          $motdepasse = $_POST["mdp"];
          $hashed = hash('md5' , $motdepasse);

          $req = "INSERT INTO users (email,pwd) VALUES ('$mail','$hashed')";

          $exec = $conn->query($req);
          
          if($exec != false){
               header('Location: ../../views/products');
           }
           else{
               echo "Vous n'êtes pas inscrit";
           }
     }
     else{
          echo "La connexion à la BDD n'a pas pu être éffectuer";
     }
?>