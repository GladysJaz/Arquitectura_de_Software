<?php

class imagen{
    private $id;
    private $nombre;
    private $Imagen;
    public function __construct($id, $nombre, $Imagen) { 

        $this->id = $id;
        $this->nombre = $nombre;
        $this->Imagen = $Imagen;

    }
    public function get_nombre(){
       return $this->nombre;
    }
    public function get_Imagen(){
       return $this->Imagen;
    }
    public function get_id(){
       return $this->id;
    }
    public function set_nombre($nombre){
       $this->nombre = $nombre;
    }
    public function set_Imagen($Iamgen){
       $this->Imagen = $Iamgen;
    }
 } 
?>