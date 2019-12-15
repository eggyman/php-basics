<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >
</head>
<body>
	<br><br><br><br><br><br>
	<div class="container">
		<div class="card text-center">

  <div class="card-body">
    <h1 class="card-title">Inscription</h1><br>
    <div class="container">

 <form method="POST" action="insert.php">
  <fieldset>

     <div class="form-group">
      <label for="exampleInputEmail1">Cin</label>
      <input type="text" class="form-control" name="cin" maxlength="8" minlength="8" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter votre numero du carte d'identiter" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisire votre Nom" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisire votre Prenom" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <button type="submit" class="btn btn-primary" onclick="alt()">Submit</button>
     <button type="reset" class="btn btn-primary">Reset</button>

  </fieldset>

</form>
</div>


  </div>

</div>
	</div>

</body>
<script>
function alt(){
	alert("ajout effectuer avec succes");
}
</script>

</html>
