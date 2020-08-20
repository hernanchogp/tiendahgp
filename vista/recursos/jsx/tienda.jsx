function tiendaView(){
  ReactDOM.unmountComponentAtNode(document.getElementById("bodycontenido"));
  ReactDOM.render(
    <Tienda />,
    document.getElementById("bodycontenido")
  );
}
