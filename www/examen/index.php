<?php

include_once("config.php");
conectaBBDD();


    // Defino una variable para verificar que hay error o no lo hay
    // Si al final, esta variable tiene contenido, muestro el error.
    $error="";


    if(isset($_POST["nombre"])){

            $nombre=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $fecha_nac=$_POST["fecha_nac"];

          /* INSERTO */
				
					$query="insert into contactos (nombre, apellidos, fecha_nac)
							values ('$nombre', '$apellidos','$fecha_nac');";
					mysqli_query($conn,$query) or
							die("error insert".mysqli_error($conn));	
    }
	  else{
		
			if (isset($_POST["id"])){

				$id =$_POST["id"];
			
				eliminar($id);
				//header("Location: index.php");
			}			
	}
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
    <script src="bootstrap/js/bootstrap.min.js" ></script>
    -->
    <title>Hello, world!</title>
	
	<script>
			function elimina(id){
					if (confirm("¿Eliminar registro con id "+id+"?") == true ){
						f = document.getElementById('formulario'+id);
						f.submit();		
					}					
			}
	</script>
  </head>


  <body>
    <h1>Productos ACME </h1>  
    <div class="container">
  <!-- Content here -->
                <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control"  name="nombre">
                    <small id="emailHelp" class="form-text text-muted">Nombre</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                    <small class="form-text text-muted" >Apellidos</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputFecha1">Fecha de nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nac">
                    <small class="form-text text-muted" >Fecha de nacimiento</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <br />

<?php

            if( strlen($error)>0){

                /*
                    Si el error no está vacio, lo muestro.
                */ 
                print "
                        <div class='alert alert-danger' role='alert'>
                                $error
                        </div>
                
                ";

            }
			      else{
				
			      }
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Fecha Nac.</th>
	    <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>  

<?php

$result=mysqli_query($conn,"select * from contactos") or
							die("error select".mysqli_error($conn));

					while($fila = mysqli_fetch_array($result)){
							print "    <tr>	
							<th scope='row'>{$fila['id']}</th>";
						
							print"
								
								  <td>{$fila['nombre']}</td>
								  <td>{$fila['apellidos']}</td>
								  <td>{$fila['fecha_nac']}</td>
								  <td> 
										<form id='formulario{$fila['id']}' action='index.php' method='post'>
											<input type='hidden' name='id' value='{$fila['id']}' />												
											<button >&#128465;</button>
										</form>
										
										<span onclick='elimina({$fila['id']})' >&#128465;</span>										
								   </td>								  
								  
								  </tr>
							";
					}

					mysqli_free_result($result);	
					closeBBDD();
					
					
?>	  
	  
	  
    
	<a href="http://www.google.es"><button>&#128465; </button></a>
  </tbody>
</table>

</div>

</body>
</html>
