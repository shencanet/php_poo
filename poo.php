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

    function __construct(){//metodo constructor estado inicial objeto
        //referencia propia clase
        $this->ruedas=4;
        $this->color="Blanco";
        $this->motor=1600;



    }




}

  $renault = new Coche();//instancia clase coche
  $seat = new Coche();
  $seat->frenar();
  echo $renault->color;

?>