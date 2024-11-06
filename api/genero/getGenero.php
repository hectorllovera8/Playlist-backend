<?php
   
   require_once('../../util/manejocore.php');
   require_once('../../config/conexion.php');

   $sql = "SELECT id, nombre FROM generos order by nombre";
   
    $result = $conn->query($sql);

    $generos = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $generos[] = $row;
        }
    }

    echo json_encode($generos);
    $conn->close();


?>