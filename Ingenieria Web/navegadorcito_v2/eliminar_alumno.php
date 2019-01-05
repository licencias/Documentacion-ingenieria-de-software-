<?php
require_once('includes/db.php');


$rut = $_GET["rut"];
if($stmt = $connection->prepare("DELETE FROM Alumno WHERE rut=?")){
    $stmt->bind_param("s", $rut);
    $stmt->execute();
    $result= $stmt->get_result();
    $stmt->fetch();
    $stmt->close();
    header('Location: mantenedor_alumno.php');
}

?>