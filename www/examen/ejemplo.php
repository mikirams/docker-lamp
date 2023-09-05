<?php

include_once("config.php");


conectaBBDD();

/*
$result=mysqli_query($conn,"select * from contactos") or
		die("error select".mysqli_error($conn));
		
while($fila = mysqli_fetch_array($result)){
	
	print "ID:  {$fila['id']}  <br />  ";
	print "Nombre:  {$fila['nombre']}  <br />  ";
	print "Apellido:  {$fila['apellidos']}  <br />  ";
	print "Fecha:  {$fila['fecha_nac']}  <br />  ";
	print "---------------------------------------------- <br/>"	;
}

mysqli_free_result($result);
*/

closeBBDD();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	-->
    <title>Hello, world!</title>
  </head>
  
  <body>
    <h1>Hello, world!</h1>	
	<div class="container">
    <form action="ejemplo.php" method="post" >
      <div class="input-group mb-3">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
      </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">€</span>
      </div>
      <input type="text" name="precio" class="form-control" aria-label="Precio (Euros)">
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>

    <div class="input-group mb-3">
      <input type="text" name="fabricante" class="form-control" placeholder="Fabricante" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
  
  
	</div>
	   
  </body>
</html>