<?php
class Persona {
    public $nombre;
    private $apellidos;

    public function __construct($nombre="",$apellidos="") {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
    }

    function setNombre($nombre) {
        $this->nombre=$nombre;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setApellidos($apellidos) {
        $this->apellidos=$apellidos;
    }
    function getApellidos() {
        return $this->apellidos;
    }
    function mostrar(){
        echo "Nombre: $this->nombre \n" ;
        echo "Apellidos: $this->apellidos \n";
    }
}
?>