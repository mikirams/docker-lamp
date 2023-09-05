<?php

include_once("config.php");


conectaBBDD();


	if (isset($_POST["id"])){

		$id =$_POST["id"];
		mysqli_query($conn,"delete from contactos where id = $id ") or
				die("error delete".mysqli_error($conn));			
				
		
	}

closeBBDD();

	header("Location: index.php");
?>
