<?php

switch ($_POST['accion']) {
    case 'crear':
        crearProyecto($_POST['titulo'], $_POST['descripcion']);
        break;
    case 'borrar':
        echo "i es igual a 1";
        break;
    case 'recargar':
        echo "i es igual a 2";
        break;
}


function crearProyecto($titulo, $descripcion) {
    
    date_default_timezone_set("America/Mexico_City");
    $fecha = date('Y-m-d H:i:s');
    $progress = 0;
    $owner = 1;
    include_once('../functions/db_connection.php');

    try{

        $stmt = $conn->prepare(" INSERT INTO project (name, description, progress, created_at_project) VALUES (?,?,?,?) ");
        $stmt->bind_param("ssis", $titulo, $descripcion, $progress, $fecha);
        $stmt->execute();
        
        $id = $stmt->insert_id;

        session_start();
        $stmt2 = $conn->prepare(" INSERT INTO user_has_project(user_id, project_id, is_user_owner) VALUES(?,?,?) ");
        $stmt2->bind_param("iii", $_SESSION["id"], $id, $owner);
        $stmt2->execute();
        
        if($stmt->affected_rows > 0 && $stmt2->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }

        $stmt->close();
        $stmt2->close();
        $conn->close();

    }catch(Exception $e){
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);

}














?>