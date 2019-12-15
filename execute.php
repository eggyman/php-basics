<?php
$bdd=new PDO('mysql:host=127.0.0.1;dbname=freeways','root','');
$con=mysqli_connect('localhost','root','','freeways');
$a="";
$b="";
$c="";
$d="";
if(isset($_POST['save']))
{
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$sql=$bdd->prepare("UPDATE etudiant SET nom=? , prenom=? ,email=? where cin=?");
$sql->execute(array($nom,$prenom,$mail,$cin));
header('location:menu.php');
}


if(isset($_GET['edit']))
{

  $cin=$_GET['edit'];
  $res=mysqli_query($con,"SELECT * FROM etudiant WHERE cin='".$cin."'");
  $r=mysqli_fetch_assoc($res);
  $a=$r['cin'];
  $b=$r['nom'];
  $c=$r['prenom'];
  $d=$r['email'];
}

?>
