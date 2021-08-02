<?php
    include ("conexion.php");
    $con= conectar();

    $id=$_POST["id_paciente"];
    $nombres = $_POST["nombres_paciente"];
    $apellidos = $_POST["apellidos_paciente"];
    $edad = $_POST["edad_paciente"];
    $direccion = $_POST["direccion_paciente"];
    $telefono = $_POST["telefono_paciente"];
    $sql="UPDATE paciente SET nombres_paciente='$nombres', apellidos_paciente='$apellidos', edad_paciente='$edad', direccion_paciente='$direccion', telefono_paciente='$telefono' WHERE id_paciente='$id'";
    $query = mysqli_query($con,$sql);
    if($query){
        echo "<script> alert('Dato actualizado con exito');
        location.href='../index.php';
         </script>";   
    }    
?>