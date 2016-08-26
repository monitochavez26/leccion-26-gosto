<?php
require_once 'demoColector.php';
require_once 'programa.php';
require_once 'demolist.php';


$nombre = $_GET['nombre'];
$id = $_GET['id'];


$pais = $_GET['pais'];



$alm = new programa();
$model = new demoColector();




$model->UpdateDEMO($id,$nombre,$pais);

echo "se actualizo registro $nombre, codigo $id , pais : $pais ejecute la consulta para verificar";
?>

<a href = "demolist.php">consultar</a>    
