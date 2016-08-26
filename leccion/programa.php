<?php
class programa {  
   private $id_programa;  
   private $nombre; 
	private $pais; 
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
   function __clone() {  
     $this->id_programa = ++$this->id_programa;   
   }  
   
public function getId_programa() {  
     return $this->id_programa;  
   }  
   public function setId_programa($id_programa) {  
     $this->id_programa = $id_programa;  
   }  
   
public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  



public function getPais() {  
     return $this->pais;  
   }  
   public function setPais($pais) {  
     $this->pais = $pais;  
   }  



 }
 ?>
