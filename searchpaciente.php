<?php 
    include ("conexion.php");
    $con= conectar();

    $search = $_POST['search'];
    if(!empty($search)){
        $query="SELECT * FROM paciente WHERE nombres_paciente LIKE  '$search%'";
        $result =  mysqli_query($con, $query);
        if(!result){
            die('Query Error'. mysqli_error($con));
        }
        $json= array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'id_paciente' => $row['id_paciente'],
                'nombres_paciente' => $row['nombres_paciente'],
                'apellidos_paciente' => $row['apellidos_paciente']
            );
        }        
        $jsonstring = json_encode($json);
        echo $jsonstring;
        
    }
?>