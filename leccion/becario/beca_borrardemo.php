<?php
require_once 'demoColector.php';
require_once 'becario.php';
require_once 'demolist.php';
$id = $_GET['id'];
$alm = new becario();
$model = new demoColector();

$model->DeleteDEMO($id);

?>
<a href = "beca_demolist.php">consultar</a> 

