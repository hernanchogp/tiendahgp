$(document).ready(function () {
  tiendaView();
});

function modalMensajeError () {
  msj = 'Ocurrió un error al procesar la solicitud'
  titulo = '<i class="fas fa-info-circle" aria-hidden="true"></i> Información'
  cuerpo = '<div class="alert alert-info"> ' + msj + '</div>'
  mostrarModal(titulo, cuerpo);
}

function mostrarModal (titulo, cuerpo) {
  $('#ModalTitulo').html(titulo)
  $('#ModalCuerpo').html(cuerpo)
  setTimeout(function () {
    $('#ModalInfo').modal('show')
  }, 900);

}
