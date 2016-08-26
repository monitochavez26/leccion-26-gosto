<?php
require_once 'demoColector.php';
require_once 'becario.php';

// Logica


$nombre = $_GET['nombre'];







$alm = new becario();
$model = new demoColector();








echo "<br>";




						 $model->InsertDEMO($nombre);
    




					?>
				<a href = "beca_demolist.php">consultar</a>    
