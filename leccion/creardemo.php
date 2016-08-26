<?php
require_once 'demoColector.php';
require_once 'programa.php';

// Logica


$nombre = $_GET['nombre'];

$pais = $_GET['pais'];





$alm = new programa();
$model = new demoColector();








echo "<br>";




						 $model->InsertDEMO($nombre, $pais);
    




					?>
				<a href = "demolist.php">consultar</a>    
