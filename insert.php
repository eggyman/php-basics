<?php
$bdd=new PDO ('mysql:host=127.0.0.1;dbname=freeways','root','');
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$sql=$bdd->prepare("INSERT INTO etudiant VALUES(?,?,?,?)");
$sql->execute(array($cin,$nom,$prenom,$email));
header('location:inscription.php');


?>
