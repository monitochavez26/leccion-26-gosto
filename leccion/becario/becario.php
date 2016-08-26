<?php
class becario {  
   private $id_becario;  
   private $nombre; 
	private $id_programa; 
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
   function __clone() {  
     $this->id_becario = ++$this->id_becario;   
   }  
   
public function getId_becario() {  
     return $this->id_becario;  
   }  
   public function setId_becario($id_becario) {  
     $this->id_becario = $id_becario;  
   }  
   
public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  



public function getId_programa() {  
     return $this->id_programa;  
   }  
   public function setId_programa($id_programa) {  
     $this->id_programa = $id_programa;  
   }  



 }
 ?>
