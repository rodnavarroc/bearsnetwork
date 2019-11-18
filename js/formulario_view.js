

const btnRepositorio = document.querySelector("#goToRepositorio");

eventListeners();

function eventListeners() {
    if(document.querySelector('#btn_crearProyecto')){
        document.querySelector('#btn_crearProyecto').addEventListener('click', () => {
            document.querySelector('#formulario_nuevoProyecto').addEventListener('submit', nuevoProyecto);
        });
    } 
    btnRepositorio.addEventListener('click', updateAndListener);
}

function updateAndListener(e){
    e.preventDefault();
    document.querySelector('#btn_crearProyecto').addEventListener('click', () => {
        document.querySelector('#formulario_nuevoProyecto').addEventListener('submit', nuevoProyecto);
    });
}

function nuevoProyecto(e){
    e.preventDefault();
    
    const titulo = document.querySelector("#nombre_proyecto").value,
          descripcion = document.querySelector("#descripcion_proyecto").value;
          accion = "crear";

    const datos = new FormData();

    datos.append('titulo', titulo);
    datos.append('descripcion', descripcion);
    datos.append('accion', accion);

    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'php/models/projects-admin.php', true);


    xhr.onload = function() {
        if(this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if(respuesta.respuesta === 'correcto') {
                console.log("Proyecto creado");
                document.querySelector("#modal-1___BV_modal_header_ button.close").click();

            } else {
                swal({
                    type: 'error',
                    title: 'No se pudo crear el proyecto',
                    text: 'No fue posible completar la operacion'
                });
            }
        } else {
            console.log("Algo pasa");
        }
    }

    xhr.send(datos);


}