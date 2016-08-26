<?php

require_once("beca_colector.php");
require_once("becario.php");
class beca_demoColector

{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new beca_colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("becario");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($nombre)
 {
 try
		{
		    $result= $this->modelo->operacion("insert into becario (id_becario,nombre,id_programa) values (default,'$nombre',default)");
                echo "se inserto registro $nombre";
                  
			return $result;
                           

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO($id,$nombre, $idp)
 {
 try
		{
		    $result= $this->modelo->operacion("update becario set nombre= '$nombre', id_programa='$idp' where id_becario = $id" );





                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO($id)
 {
 try
		{
		     $result= $this->modelo->operacion("delete from programa where id_becario = $id");
                echo "se elimino registro $id, ejecute la consulta para verificar";

                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}

 ?>







