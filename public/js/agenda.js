document.addEventListener('DOMContentLoaded', function() {

    // Seleccionar el formulario
    let formulario = document.querySelector("#formularioEventos");

    // Busca un div para combertirlo en una agenda
    var calendarEl = document.getElementById('agenda');

    // Poner indicaciones del calendario(opciones)
    var calendar = new FullCalendar.Calendar(calendarEl, {

    initialView: 'dayGridMonth',
    //Mostrar la agenda en español
    locale:"es",
    displayEventTime:false,

    //Mostrar vista por mes, semana y lista de semana
    headerToolbar:{
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listWeek'
    },

    //events:baseURL+"/evento/mostrar",
    eventSources: {
        url: baseURL+"/evento/mostrar",
        method: "POST",
        extraParams: {
            _token: formulario._token.value,
        }
    },

    dateClick:function (info){
        // Resetea la informacion del formulario
        formulario.reset();
        // Fechas en formato correspondiente
        formulario.start.value=info.dateStr;
        // formulario.end.value=info.dateStr;

        $("#evento").modal("show");
    },

    eventClick:function (info){
        var evento = info.event;
        console.log(evento);

        // axios permite enviar informacion a traves de una URL
        axios.post(baseURL+"/evento/editar/"+info.event.id).
        then(
            (respuesta)=>{
                // Recuperamos los datos
                formulario.id.value = respuesta.data.id;
                formulario.title.value = respuesta.data.title;
                formulario.descripcion.value = respuesta.data.descripcion;
                formulario.start.value = respuesta.data.start;
                // muestra la ventanita o modal
                $("#evento").modal("show");
            }
        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            }
        )


    }

    });

    // Mostrar el calendario
    calendar.render();

    // Capturar accion del boton
    document.getElementById("btnGuardar").addEventListener("click",function () {
        enviarDatos("/evento/agregar");
    });

    // Capturar accion del boton
    document.getElementById("btnEliminar").addEventListener("click",function () {
        enviarDatos("/evento/borrar/"+formulario.id.value);
    });

    // Capturar accion del boton
    document.getElementById("btnModificar").addEventListener("click",function () {
        enviarDatos("/evento/actualizar/"+formulario.id.value);
    });

    function enviarDatos(url){
        const  datos = new FormData(formulario);
        console.log(datos);

        const nuevaURL = baseURL+url;

        // axios permite enviar informacion a traves de una URL
        axios.post(nuevaURL,datos).
        then(
            (respuesta)=>{
                // Metodo que actualiza los eventos de la url para que saque unos nuevos de la consulta
                calendar.refetchEvents();
                // en cuanto se insereta desaparece la ventanita(modal)
                $("#evento").modal("hide");
            }
        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            }
        )
    }


});


