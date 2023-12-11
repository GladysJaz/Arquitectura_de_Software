<?php

class imagen {

    private $id;
    private $nombre;
    private $Imagen;
    public function __construct($id, $nombre, $Imagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->Imagen = $Imagen;
    }
}
?>
