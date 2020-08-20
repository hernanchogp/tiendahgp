"use strict";

function tiendaView() {
  ReactDOM.unmountComponentAtNode(document.getElementById("bodycontenido"));
  ReactDOM.render(React.createElement(Tienda, null), document.getElementById("bodycontenido"));
}