<?php
// Interfaz Componente que define el método renderizar
interface ComponenteCuauhtli {
    public function ArchivoRenderizar();
}

// Clase Lectura que representa elementos individuales del menú
class Lectura implements ComponenteCuauhtli {
    private $nombre;

public function __construct($nombre) {
        $this->nombre = $nombre;
    }

 public function renderizar() {
        echo '<li>' . $this->nombre . '</li>';
    }
}

// Clase del menu desplegable que representa menús desplegables o submenús
class Lectura implements ComponenteCuauhtli {
    private $nombre;
    private $elementos = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function agregarElemento(ComponenteCuauhtli $elemento) {
        $this->elementos[] = $elemento;
    }

     public function renderizar() {
        echo '<li>' . $this->nombre . '<ul>';
        foreach ($this->elementos as $elemento) {
            $elemento->renderizar();
        }
        echo '</ul></li>';
    }
}

// se crea el menu
$menu = new Compuesto('PDF');
$menu->agregarElemento(new Lectura('Lectura'));
$subMenu = new Compuesto('PDF');
$subMenu->agregarElemento(new Lectura('Lectura'));
$menu->agregarElemento($subMenu);


// Renderizar (el preceso de los datos para que se visualicen) el menú
echo '<ul>';
$menu->renderizar();
echo '</ul>';
?>

