<?php
$dest = filter_input(INPUT_POST, 'destino');
$asun = filter_input(INPUT_POST, 'asunto');
$mens = filter_input(INPUT_POST, 'mensaje');

if(
    mail($dest, $asun, $mern)){

        require'confirm.php';
    }

?>