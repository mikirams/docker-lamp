<?php

	$dbhost='db';
	$dbuser="root";
	$dbpass="test";	
	$dbname="contactos";	

	
	
	function conectaBBDD(){
		
		global $dbuser, $dbpass, $dbhost,$dbname;
		global $conn;
		
		$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)
		or die("No conecto con BBDD".mysqli_error($conn));
		
	}

	function closeBBDD(){
		global $conn;
		
		mysqli_close($conn);
	}
	
	
	function eliminar($id){
		
				global $conn;

				
				mysqli_query($conn,"delete from contactos where id = $id ") or
						die("error delete".mysqli_error($conn));			
						
		
		
	}


?>