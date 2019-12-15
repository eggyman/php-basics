<!DOCTYPE html>
<html>
<head>
	<title>supprimer</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >

</head>
<body>
	<br><br><br>
	<div class="container">
		<div class="card text-center">

  <div class="card-body">
    <h1 class="card-title">suppression des etudiants</h1><br><br>
    <form method="POST" action="delete.php">
    	<div class="container">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputPassword1">CIN</label>
      <input  class="form-control" id="exampleInputPassword1" name="cin" placeholder="Carte d'indentite nationale">
    </div>
<?php
		$con=mysqli_connect("localhost","root","","freeways");
		$sql=mysqli_query($con,"SELECT * FROM etudiant");

 ?>
   <table class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col">Cin</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Tél</th>
    </tr>
		<?php while($r=mysqli_fetch_assoc($sql))
					{
		 	?>
			<tr>
				<td scope="col"><?php echo $r['cin'];?></td>
				<td scope="col"><?php echo $r['nom'];?></td>
				<td scope="col"><?php echo $r['prenom'];?></td>
				<td scope="col"><?php echo $r['email'];?></td>
			</tr>
		<?php  } ?>


  </thead></table>
    <button type="submit" class="btn btn-primary">Delete</button>
        <button type="reset" class="btn btn-primary">Reset</button>
  </fieldset></div>
</form>
  </div>
</div>

	</div>
</body>
</html>
