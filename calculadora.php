<style>

    .resultado{
        color:#f00;
       
        font-size:32px;

            }
</style>


<?php
       //echo $_SERVER['HTTP_USER_AGENT'];//datos navegador

       

        function calcular($calculo){
            if(!strcmp("Suma",$calculo)){
                global $numero1;
                global $numero2;
                $resultado=$numero1+$numero2;//evita concatenacion

                echo " <p class='resultado'><br> El Resultado de la suma es .$resultado </p> ";
            };

            if(!strcmp("Resta",$calculo)){
                global $numero1;
                global $numero2;
                $resultado=$numero1-$numero2;//evita concatenacion
    
                echo "<p class='resultado'> <br> El Resultado de la Resta es $resultado</p> ";
            };

            if(!strcmp("Multiplicacion",$calculo)){
                global $numero1;
                global $numero2;
                $resultado=$numero1*$numero2;//evita concatenacion
    
                echo "<p class='resultado'><br> El Resultado de la Multiplicacion es $resultado </p>";
            };

            if(!strcmp("Division",$calculo)){
                global $numero1;
                global $numero2;
                $resultado=$numero1%$numero2;//evita concatenacion
    
                echo "<p class='resultado'> El Resultado de la Division es $resultado </p>" ;
            };

            if(!strcmp("Modulo",$calculo)){
                global $numero1;
                global $numero2;
                $resultado=$numero1/$numero2;//evita concatenacion
    
                echo "<p class='resultado'><br> El Resultado de la Modulo es $resultado</p>";

            }
            if(!strcmp("Incremento",$calculo)){
                global $numero1;
                $numero1++;
                
    
                echo "<p class='resultado'><br> El Resultado del Incremento es  $numero1 </p>";
            };
            if(!strcmp("Decremento",$calculo)){
                global $numero1;
                $numero1--;
                echo "<p class='resultado'><br> El Resultado del Decremento es $numero1 </p>";
                
    
                
            };};





    /*

        if(!strcmp("Suma",$operacion)){

            echo "<br> El Resultado de la suma es  " .($numero1+$numero2);
        }};
        if(!strcmp("Resta",$operacion)){

            echo "<br> El Resultado de la Resta es  " .($numero1-$numero2);
        };
        if(!strcmp("Multiplicacion",$operacion)){

            echo "<br> El Resultado de la Multiplicacion es  " .($numero1*$numero2);
        };
        if(!strcmp("Division",$operacion)){

            echo "<br> El Resultado de la Division es  " .($numero1/$numero2);
        };
        if(!strcmp("Modulo",$operacion)){

            echo "<br> El Resultado de la Modulo es  " .($numero1%$numero2);
        */



        ?>