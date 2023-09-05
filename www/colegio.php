<html>
<!--Ejemplo extraido de:
   https://parzibyte.me/blog/2020/09/28/crear-tabla-relaciones-mysql/
-->
    <head>
        <title>Colegio-Miguel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>¡El colegio!</h1>";

                $conn = mysqli_connect('db', 'root', 'test', "colegio");

                $query = 'select estudiantes.nombre as A, materias.nombre as B, notas_estudiantes_materias.puntaje as C
                from estudiantes, materias, notas_estudiantes_materias 
                where estudiantes.id=notas_estudiantes_materias.id_estudiante 
                and materias.id=notas_estudiantes_materias.id_materia;';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo '<thead><tr><th></th><th>nombre</th><th>materia</th><th>puntaje</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }

                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>
