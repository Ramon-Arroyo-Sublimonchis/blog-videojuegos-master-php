<?php

if(isset($_POST)){
    //Recoger los valores del Formulario de Registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

}


    //Arrar de Errores

    

    //Validar datos antes de guardarlos en la base de datos

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){

        echo "El nombre es valido";
    } else {
        echo "Lo campos numericos son invalidos";
    }



?>