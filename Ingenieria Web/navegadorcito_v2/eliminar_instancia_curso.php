<?php
require_once('includes/db.php');


$sigla = $_GET["sigla"];
$agno = $_GET["agno"];
$semestre = $_GET["semestre"];
if($stmt = $connection->prepare("DELETE FROM InstanciaCurso WHERE sigla=? AND agno=? AND semestre=?")){
    $stmt->bind_param("sss", $sigla, $agno, $semestre);
    $stmt->execute();
    $result= $stmt->get_result();
    $stmt->fetch();
    $stmt->close();
    header('Location: mantenedor_cursos.php');
}

?>