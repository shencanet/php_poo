<?php


//primera letra clase may
class Coche {
    var $ruedas;//caracteristicas propiedades 
    var $color;
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

?>