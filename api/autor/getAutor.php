<?php
   
   require_once('../../util/manejocore.php');
   require_once('../../config/conexion.php');

   $sql = 'SELECT * FROM autor ORDER by nombre';   

    $result = $conn->query($sql);

    $autores = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $autores[] = $row;
        }
    }

    echo json_encode($autores);
    $conn->close();

?>