<!DOCTYPE html>
<html>
    <body>
    <h1>Envio mails</h1>
        <div class="container">

            <div class="cabezera">
                <img src="./assets/mailing1.jpg" />
            </div>
            <div class="cuerpo">
                <P>Con ese formulario vamos a recoger los datos</P>
                <br/>
                <form action="" method="POST" enctype="multipart/form-data" class="formulario">
                    <label for="direccion">Destinatario
                        <input type="email" name="destino" class="form-control"/>

                    </label>
                    <br/>
                    <label for="asunto">Asunto
                        <input type="text"  name="asunto" class="form-control" />


                    </label>
                    <br/>
                    <label for="mensaje">Mensaje
                        <textarea name="mensaje"></textarea>


                    </label>





                </form>


            </div>



        </div>



    </body>
    </html>