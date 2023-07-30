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
$persona1 = new Persona();
$persona1->setNombre("Benito");
$persona1->setApellidos("Juárez");
$persona1->mostrar();

class Trabajador extends persona{
    private $numSS;
    public function __construct($nombre,$apellidos,$numSS) {
        parent::__construct($nombre,$apellidos);
        $this->numSS=$numSS;
    }
    function mostrar(){
       parent::mostrar();
        echo "Nº SS: $this->numSS \n";
    }
    function ver(){
        return parent::getNombre();
    }
}

$trabajador1= new Trabajador("Anacleto","Regaliz","35/55667788");
$trabajador1->mostrar();
echo $trabajador1->ver();
?>