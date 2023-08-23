<?php

    if($_POST){
    session_start();
    require_once("../controlador/conexion.php");       
    $conn = OpenCon(); 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['user'];
    $contraseña = $_POST['password'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['contact'];
    
    $query = "INSERT INTO nuevousuario (nombre, apellido, user, password, telefono,contact ) 
    VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$telefono','$sexo')";

    
    if(!$consulta){
        echo mysqli_error($mysqli);
    }else{
       
    }

    if($user = mysqli_fetch_assoc($consulta)) {

        header("location:../vista/home.php");
        CloseCon($conn);

    } else {

        header("location:../vista/index.php");
        CloseCon($conn);
        
    }
 
   }

?>