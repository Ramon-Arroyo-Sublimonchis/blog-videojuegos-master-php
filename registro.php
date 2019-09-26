<?php
    

if(isset($_POST)){

    //Conexion a la Base de Datos
    require_once 'includes/conexion.php';

    session_start();



    //Recoger los valores del Formulario de Registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

}


    //Arrar de Errores

    $errores = array();

    //Validar datos antes de guardarlos en la base de datos

    //Validar campo nombre

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){

        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El Nombre no es Valido";
    }

    //Validar Apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ){

        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los Apellidos no son Validos";
    }


    //Validar el Mail
    if(!empty($apellidos) && filter_var($email , FILTER_VALIDATE_EMAIL) ){

        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El Email no es Valido";
    }

      //Validar el Password
      if(!empty($password) ){

        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contrasena esta vacia";
    }

$guardar_usuario = false;

if( count($errores) == 0 ){
    $guardar_usuario = true;
    
    //Cifrar la Contrasena
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=> 4]);

    //INSERTAR USUARION EN LA BASE DE DATOS
    $sql = "INSERT INTO usuarios  VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
    $guardar = mysqli_query( $db, $sql );

   

    if($guardar){
        $_SESSION['completado'] = "El Registro se ha completado con Exito";
    }


} else {

    $_SESSION['errores']['general'] = "Fallo al Guardar el Usuario"; 

}


header('Location: index.php');

?>