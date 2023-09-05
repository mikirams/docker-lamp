<?php
try {
  ## Creamos la variable $dbh que es la conexión completa a la base de datos, pasándole
  # los parámetros de conexión del host, la base de datos, el usuario y la contraseña
    $dbh = new PDO("mysql:host=db;dbname=crud_example_php", "root", "test");
} catch (PDOException $e){
    $dbh = $e->getMessage();
}
?>
