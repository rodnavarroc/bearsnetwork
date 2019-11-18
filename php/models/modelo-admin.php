<?php

$accion = $_POST['accion'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
date_default_timezone_set("America/Mexico_City");
$fecha = date('Y-m-d H:i:s');
$organization = $_POST['organization'];

$opciones = array(
    'cost' => 12
);

$hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

if($accion === 'crear') {

    $img_nombre_tmp = $_FILES['imagen']['tmp_name']; //Nombre temporal de la img
    $fullName = explode(".", $_FILES['imagen']['name']); //Separa el nombre del formato
    $_FILES['imagen']['name'] = 'img_profile.' . $fullName[1]; //Se cambia el nombre y se mantiene el formato
    $imagen = $_FILES['imagen']['name']; //Nombre permanente
    

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
        $stmt = $conn->prepare(" CALL agregarUsuario(?,?,?,?,?,?,?) ");
        $stmt->bind_param("sssssss", $usuario, $nickname, $hash_password, $email, $fecha, $organization, $imagen);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'Filas afectadas' => $stmt->affected_rows,
                'tipo' => $accion
            );
            $miCarpeta = "../../users/" . $nickname;
            mkdir($miCarpeta, 0777); //Crear carpeta del usuario
            mkdir($miCarpeta . "/repositorio", 0777);//Crear la carpeta repositorio
            move_uploaded_file($img_nombre_tmp, $miCarpeta . '/' . $imagen); //Mover archivo al servidor
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
        $stmt = $conn->prepare("SELECT id, nickname, email, password, name, organization, image FROM user INNER JOIN profile ON user.id = profile.user_id WHERE nickname = ? ");
        $stmt->bind_param('s', $nickname);
        $stmt->execute();

        $stmt->bind_result($id_usuario, $nickname_usuario,$email_usuario, $password_usuario, $name_usuario, $depedencia_usuario, $imagen_usuario);
        $stmt->fetch();

        if($email_usuario){
            //El usuario existe, verificar el password
            if(password_verify($password, $password_usuario)) {
                //Iniciar la sesion
                session_start();
                $_SESSION['nickname'] = $nickname_usuario;
                $_SESSION['dependencia'] = $dependencia_usuario;
                $_SESSION['name'] = $name_usuario;
                $_SESSION['email'] = $email_usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['image'] = $imagen_usuario;
                $_SESSION['login'] = true;

                //Login correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $name_usuario,
                    'tipo' => $accion,
                    'id' => $id_usuario,
                    'pass1' => $hash_password,
                    'passDB' => $password_usuario
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