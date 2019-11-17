<?php

$accion = $_POST['accion'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
date_default_timezone_set("America/Mexico_City");
$fecha = date('Y-m-d H:i:s');
$organization = $_POST['organization'];
$imagen = 'imagen.png';

if($accion === 'crear') {
    //codigo para crear los administradores 

    //Hashear passwords
    $opciones = array(
        'cost' => 12
    );

    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    //Importar la conexion
    include_once('../functions/db_connection.php');
   

    try{
        //Realizar la consulta a la base de datos
        $stmt = $conn->prepare(" CALL agregarUsuario(?, ?, ?, ?, ?, ?); ");
        $stmt->bind_param("ssssss", $usuario, $hash_password, $email, $fecha, $organization, $imagen);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'Filas afectadas' => $stmt->affected_rows,
                'tipo' => $accion
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        
        $stmt->close();
        $conn->close();
    } catch(Exception $e){
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    } 
    
    echo json_encode($respuesta);

}

if($accion === 'login') {

    include_once('../functions/db_connection.php');

    try {
        $stmt = $conn->prepare("SELECT id, email, password FROM user WHERE email = ? ");
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $stmt->bind_result($id_usuario, $email_usuario, $password_usuario);
        $stmt->fetch();

        if($email_usuario){
            //El usuario existe, verificar el password
            if(password_verify($password, $password_usuario)) {
                //Iniciar la sesion
                session_start();
                $_SESSION['email'] = $email_usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['login'] = true;

                //Login correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $email_usuario,
                    'tipo' => $accion
                );
            } else {
                //Login incorrecto, enviar error
                $respuesta = array(
                    'respuesta' => 'Password incorrecto'
                );
            }

            
        } else {
            $respuesta = array(
                'respuesta' => 'Usuario no existe'
            );
        }
        
        $stmt->close();
        $conn->close();
        
    } catch(Exception $e){
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}


?>