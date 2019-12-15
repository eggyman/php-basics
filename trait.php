<?php
	$con=mysqli_connect("localhost","root","","freeways");
  $mail=$_POST['mail'];
  $pwd=$_POST['pwd'];
  $sql="SELECT * FROM etudiant WHERE email='".$mail."' and cin='".$pwd."'";
  $res=mysqli_query($con,$sql);
  if(mysqli_fetch_assoc($res))
    header("location:supp.php");
    else {
      header("location:login.php?invalide=please enter correct user name and password");
    }


?>
