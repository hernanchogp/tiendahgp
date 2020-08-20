"use strict";

function tiendaView() {
  var data = "x_m=" + 'getTiendas' + "&x_c=" + 'tiendaController';
  $.ajax({
    url: "../../controlador/rutaController.php",
    type: "POST",
    data: data,
    global: true
  }).done(function (result) {
    if (typeof result !== 'undefined' && result != null) {
      if (result.codigoerror == "202") {
        ReactDOM.unmountComponentAtNode(document.getElementById("bodycontenido"));
        ReactDOM.render(React.createElement(Tienda, { tiendas: result.tiendas }), document.getElementById("bodycontenido"));
        $('#datatableTienda').dataTable();
      } else {
        modalMensajeError();
      }
    } else {
      modalMensajeError();
    }
  }).fail(function (result) {
    console.log(result);
  });
}