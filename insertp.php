<?php
    include ("conexion.php");
    $con= conectar();
        
    $nombres = $_POST['nombres_paciente'];
    $apellidos = $_POST['apellidos_paciente'];
    $edad = $_POST['edad_paciente'];
    $direccion = $_POST['direccion_paciente'];
    $telefono = $_POST['telefono_paciente'];

    $sql= "INSERT INTO paciente VALUES('','$nombres','$apellidos','$edad','$direccion','$telefono')";
    $query = mysqli_query($con,$sql);
    if($query){
        echo "<script> alert('Dato ingresado con exito');
        location.href='..github/tareas/index.php';
         </script>";   
    }    
?>