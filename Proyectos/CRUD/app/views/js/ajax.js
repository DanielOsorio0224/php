const formularios_ajax = document.querySelectorAll(".FormularioAjax");

formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit",function(e){
        e.preventDefault();
        Swal.fire({
            title: "Estas seguro?",
            text: "Quieres enviar el formulario?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Enviar",
            cancelButtonText: "No, cancelar"
          }).then((result) => {
            if (result.isConfirmed) {
             let data = new FormData(this);
             let method = this.getAttribute("method");
             let action = this.getAttribute("action");

             let encabezado = new Headers();

             let config={
                method:method,
                headers:encabezado,
                mode: 'cors',
                cache: 'no-cache',
                body: data
             }
             fetch(action,config)
             .then(res => res.json())
             .then(res => {
                return alertas_ajax(res)
             })
            }
          });
    });
})

function alertas_ajax(alerta){

    if(alerta.tipo=="simple"){

        Swal.fire({
            icon: alerta.icono,
            title: alerta.titulo,
            text: alerta.texto,
            confirmButtonText: 'ACeptar'       
          });
    }else if(alerta.tipo=="recargar"){
        Swal.fire({
            icon: alerta.icono,
            title: alerta.titulo,
            text: alerta.texto,
            confirmButtonText: 'Aceptar'
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
    }else if(alerta.tipo=="limpiar"){
        Swal.fire({
            icon: alerta.icono,
            title: alerta.titulo,
            text: alerta.texto,
            confirmButtonText: 'Aceptar'
          }).then((result) => {
            if (result.isConfirmed) {
              document.querySelector(".FormularioAjax").reset();
            }
          });
    }else if(alerta.tipo=="redireccionar"){
        window.location.href=alerta.url;
    }
}