<?php 
extract($_POST);//extraire les infos envoyés du form => $nom,$email,$message,$sujet
//connexion avec la bd
$connection = new PDO("mysql:host=localhost;dbname=dbproduit","root","");
//prepare une requete sql d'ajout
$requete_prepare=$connection->prepare("insert into contact(nom,email,sujet,message) values(?,?,?,?) ");
//execution de la requete
$requete_prepare->execute(array($nom,$email,$sujet,$message));
 //Redirection 

 ?>