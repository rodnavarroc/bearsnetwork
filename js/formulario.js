eventListeners();

function eventListeners() {
    signupButton = document.querySelector("#signupButton").addEventListener('click', revelarRegistro);
    document.querySelector('#formulario_login').addEventListener('submit', login);
}

function revelarRegistro(e){
    document.querySelector('#formulario_registro').addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
    e.preventDefault();
    
   //Obtenemos valores del formulario
    const nombre = document.querySelector('#usuario_registro').value,
          nickname = document.querySelector('#nickname_registro').value,
          email = document.querySelector('#email_registro').value,
          password = document.querySelector('#password_registro').value,
          organization = document.querySelector('#afiliacion_registro').value,
          imagen = document.querySelector('#imagen').files[0],
          accion = "crear";

    if(nombre === '' || nickname === '' || password === '' || email === '' || organization === '') {//Validamos que los campos no esten vacios
        swal({
            type: 'error',
            title: 'Campos vacíos',
            text: 'Los campos son obligatorios'
        })
    } else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i).test(email)) {//Validamos que el correo sea valido
        swal({
            type: 'error',
            title: 'Correo no valido',
            text: 'Ingrese un correo electronico valido'
        })
    } else {
        //Una vez se hicieron las validaciones, comenzar con nuestra peticion ajax
        //Datos que se envian al servidor
        var datos = new FormData();
        datos.append('usuario', nombre);
        datos.append('nickname', nickname);
        datos.append('email', email);
        datos.append('password', password);
        datos.append('organization', organization);
        datos.append('accion', accion);
        datos.append('imagen', imagen);
        
        //Crear el llamado a ajax
        var xhr = new XMLHttpRequest();

        //Abrir la conexion
        xhr.open('POST', 'php/models/modelo-admin.php', true);
        
        //Cargar la informacion
        xhr.onload = function() {
            if(this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                //Si la respuesta es correcta
                console.log(respuesta);
                if(respuesta.respuesta === 'correcto') {
                    //Si es un nuevo nombre
                    if(respuesta.tipo === 'crear') {
                        swal({
                            title: 'Registro completado',
                            text: 'Presione OK e inicie sesion',
                            type: 'success'
                        })
                        .then(resultado => {
                            if(resultado.value) {
                                window.location.href = 'index.php';
                            } else {
                                window.location.href = 'index.php';
                            }
                        });
                    }
                } else if(respuesta.respuesta === 'error') {
                    swal({
                        type: 'error',
                        title: 'Cuenta en uso',
                        text: 'El email o usuario ya ha sido registrado'
                    });
                }
            } else {
                //hubo un error
                swal({
                    type: 'error',
                    title: 'Error en la operacion',
                    text: 'Ha ocurrido un error en nuestros servidores, intentelo más tarde'
                });
            }
        }
        //Enviar los datos
        xhr.send(datos);
    }
}

function login(e) {
    e.preventDefault();
    console.log("submit");
    var nickname = document.querySelector('#nickname').value,
        password = document.querySelector('#password').value;

    if(nickname === '' || password === '') {
        swal({
            type: 'error',
            title: 'Campos vacíos',
            text: 'Los campos son obligatorios'
        })
    } else {
        //Ambos campos son correctos, mandar ejecutar ajax
        //Datos que se envian al servidor
        var datos = new FormData();
        datos.append('nickname', nickname)
        datos.append('password', password);
        datos.append('accion', 'login');
        
        //Crear el llamado a ajax
        var xhr = new XMLHttpRequest();

        //Abrir la conexion
        xhr.open('POST', 'php/models/modelo-admin.php', true);
        
        //Cargar la informacion
        xhr.onload = function() {
            if(this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                //Si la respuesta es correcta
                if(respuesta.respuesta === 'correcto') {
                    if(respuesta.tipo === 'login') {
                        window.location.href = 'view.php';
                    }
                } else if(respuesta.respuesta === 'Password incorrecto'){
                    //hubo un error
                    swal({
                        title: 'Contraseña incorrecta',
                        text: 'La contraseña no coincide con el usuario',
                        type: 'error'
                    });
                } else if(respuesta.respuesta === 'Usuario no existe') {
                    //hubo un error
                    swal({
                        title: 'Usuario no existe',
                        text: 'Verifique su nombre de usuario',
                        type: 'error'
                    });
                }
            }
        }
        
        //Enviar los datos
        xhr.send(datos);
    }
}
