<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-5" />
        <title>Funcion mail</title>
        <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css"/>
        
        
        <link type="text/css" rel="stylesheet" href="./css/bootstrap-theme.css"/>
        
        <link rel="stylesheet" href="./css/syles.css">
        


    </head>

<body>
    <h1>Envio mails</h1>
    <div class="container">

        <div class="cabecera">
            <img src="./assets/mailing1.jpg" />
        </div>
        <div class="cuerpo">
            <P>Con ese formulario vamos a recoger los datos</P>
            <br />
            <form action="" method="POST" enctype="multipart/form-data" class="formulario">
                <label for="direccion">Destinatario
                    <input type="email" name="destino" class="form-control" />

                </label>
                <br />
                <label for="asunto">Asunto
                    <input type="text" name="asunto" class="form-control" />


                </label>
                <br />
                <label for="mensaje">Mensaje
                    <textarea name="mensaje" class="form-control"></textarea>
                    <br />
                    <input type="submit" class="btn-success" value="Enviar" />
                
                
                </label>





            </form>


        </div>



    </div>


<footer>

    <hr/>
    &COPY; SHENCANET <?php echo date ('D M Y');?>
</footer>

</body>

</html>