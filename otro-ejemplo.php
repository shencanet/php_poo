<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
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
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>
<form name="form" method="post" action="">
    <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">


    <label for="operacion" id="operacion"></label>
    <select name="operacion" id="operacion">
        <option>Suma</option>
        <option>Resta</option>
        <option>Multiplicacion</option>
        <option>Division</option>
        <option>Modulo</option>
        <option>Incremento</option>
        <option>Decremento</option>
    </select>

    	</p>



<p>
<input type="submit" name="button" id="button" value="Enviar" onClick="prueba" >
</p>
</form>

<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><label for="password"></label>
      <input type="text" name="contra" id="contra"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
<?php
    include("calculadora.php");
    
    if(isset($_POST["button"])) {

      $numero1=$_POST["num1"];
      $numero2=$_POST["num2"];
    
      $operacion=$_POST["operacion"];
      calcular($operacion);
  
  };

?>


</body>
</html>