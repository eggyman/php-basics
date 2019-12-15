<!DOCTYPE html>
<html>
<head>
	<title>Acceuil</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >

</head>
<body>
	<?php require_once 'execute.php';?>

	<br><br><br>
	<div class="container">
		<div class="card text-center">

  <div class="card-body">
    <h1 class="card-title">Menu</h1><br><br>

    <br><br><br>
    <form method="POST" action="execute.php">
  <fieldset>

    <div class="form-group">
      <label for="exampleInputEmail1">Reference</label>
      <input type="text" readonly class="form-control" name="cin" value="<?php echo $a ; ?>"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Carte d'identiter nationale">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" name="nom"  id="exampleInputEmail1"value="<?php echo $b ; ?>" aria-describedby="emailHelp" placeholder="Nom">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prix</label>
      <input type="text" class="form-control" name="prenom"  id="exampleInputEmail1" value="<?php echo $c ; ?>" aria-describedby="emailHelp" placeholder="Prenom">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Quantite</label>
      <input type="text" class="form-control" name="mail"  id="exampleInputEmail1"value="<?php echo $d ; ?>" aria-describedby="emailHelp" placeholder="E-mail">
    </div></fieldset>
      <button type="submit" class="btn btn-primary" name="save">Modifier</button><br><br>
  </form>








    	<div class="container">
  <fieldset>
    <?php
       $con = mysqli_connect('localhost','root','','freeways');

        $sql =mysqli_query($con,'SELECT * from etudiant');

        ?>
   <table class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">Cin</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">E-mail</th>
      <th scope="col"></th>

    </tr>
    <?php
            while($donnees = mysqli_fetch_assoc($sql))
            {
            ?>
             <tr >
                    <td scope="col"><?php echo $donnees['cin'];?></td>
                    <td scope="col"><?php echo $donnees['nom'];?></td>
                    <td scope="col"><?php echo $donnees['prenom'];?></td>
                    <td scope="col"><?php echo $donnees['email'];?></td>,
										<td scope="col"><a href="menu.php?edit=<?php echo $donnees['cin'];?>"class="btn btn-warning">update</a></td>


                </tr>
                <?php
            }

            ?>
  </thead></table>

  </fieldset></div>

  </div>
</div>

	</div>
</body>
</html>
