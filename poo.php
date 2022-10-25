<?php


//primera letra clase may
class Coche {
    //private $ruedas;//solo accesible desde la propia clase encapsulacion    
    protected $ruedas;// de esta forma camion podra verla
    var $color;//caracteristicas propiedades 
    var $motor;
    function arrancar(){
        echo "Motor arrancado";
       
    }//funciones o metodos
    function frenar(){

        echo "estoy frenando<br>";
    }

    function cambio_color($color_coche, $nombre_coche){
        $this->color=$color_coche;
        echo "El color del . $nombre_coche es ". $this->color; ;
    }

    function __construct(){//metodo constructor estado inicial objeto
        //referencia propia clase
        $this->ruedas=4;
        $this->color="Blanco";
        $this->motor=1600;



    }

    function get_ruedas(){
        return $this->ruedas;
    }




}

class Camion extends Coche{ //hereda de coche
    function __construct(){
        $this->ruedas=8;
        $this->color="Gris";
        $this->motor=5000;

        function arrancar(){
            parent::arrancar();
            echo "camion arrancado";
        }


    }}

  $renault = new Coche();//instancia clase coche
  $seat = new Coche();
  //$seat->frenar();
  //echo $renault->color;
  $seat->cambio_color("azul" , "LEON");

  $Scania = new Camion();
  $Scania->cambio_color("color camion", "TRuck");
  echo "tiene" . $mazda->get_ruedas() ;//setter
