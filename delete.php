<?php
$bdd=new PDO ('mysql:host=127.0.0.1;dbname=freeways','root','');
$cin=$_POST['cin'];
$sql=$bdd->prepare("DELETE FROM etudiant WHERE cin=?");
$sql->execute(array($cin));
header("location:supp.php");


?>
