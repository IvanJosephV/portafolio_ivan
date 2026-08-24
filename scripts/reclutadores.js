
    $("#formulario_reclutadores").on("submit",function(e)
    {

        e.preventDefault(); //Evita el envío del formulario por defecto
        guardar(e);  
    });



function guardar(e) {


//----------------------------------------------------------------//

  e.preventDefault(); // No se activará la acción predeterminada del evento
  $("#btnGuardar").prop("disabled", true);

  var formData = new FormData($("#formulario_reclutadores")[0]);

  $.ajax({
    url: "./ajax/reclutadores.php?op=guardar&r=" + new Date().getTime(),
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(data) {
        Swal.fire({
            title: 'Resultado',
            text: data, 
            icon: 'success',
            showConfirmButton: false,
            timer: 1300 // Tiempo antes de cerrar automáticamente
        }).then(() => {
             location.reload();
        });
    },
    error: function() {
        loadingDialog.close(); // Cerrar el diálogo de loading
        Swal.fire({
            title: 'Error',
            text: "Error en la petición.",
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    }
  });
}