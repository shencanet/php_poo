<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
<?php
       if(isset($_POST["enviando"])) {
        $usuario=$_POST["nombre_usuario"];
        $contra=$_POST["contra"];//atributo name

       $resultado = $contra==1234 && $usuario=="Juan" ? "Puedes Pasar" : "nO Puede spasar";
	   echo $resultado;

       }
        ?>