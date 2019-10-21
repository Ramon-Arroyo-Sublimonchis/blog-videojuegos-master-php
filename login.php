
<?php

    //Iniciar la sesion y la conexion a la BD
    require_once 'includes/conexion.php';

    //Recoger los datos del Formulario

  if(isset($_POST)){
    //Borrar Error Antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

    //Recoger los datos del Formulario
      $email = trim($_POST['email']);
      $password = $_POST['password'];

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db,$sql);


    if($login && mysqli_num_rows($login) == 1 ){
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contrasena
        $verify = password_verify($password, $usuario['password']); 
        if($verify){
        //Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
          
        } else {
        //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login Incorrecto!!";

        }


    } else {
        //Mensaje de Error
        $_SESSION['error_login'] = "Login Incorrecto!!";
    }
  

}  


    //Redirigir al Index.php
    header('Location: index.php');

?>