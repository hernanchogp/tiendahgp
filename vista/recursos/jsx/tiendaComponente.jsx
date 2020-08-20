class Tienda extends React.Component{
	constructor(props){
		super(props);
		this.eventoSubmit = this.eventoSubmit.bind(this);

		this.state = {
			tiendas: props.tiendas

	 }
	}

	eventoSubmit(evento){
		evento.preventDefault();

	}

	render(){

	var columnas =this.props.tiendas.map((tienda, i) => (

      <tr>
				<td>{tienda.id}</td>
				<td>{tienda.nombre}</td>
				<td>{tienda.fecha_apertura}</td>
					<td></td>
				</tr>
  ));//*/

		return(
			<div className="card border-secondary mt-2">
	      <div className="card-header bg-secondary border-secondary text-white">
	        <i class="fas fa-store" />&nbsp; Listado de Tiendas
	      </div>
	      <div className="card-body">
	        <div className="row m-2">
	          <div class="table-responsive">
	            <table
	              class="table text-center dtable"
	              id="datatableTienda"
	              className="table table-bordered table-striped table-responsive-sm table-hover small table-sm w-100"
	            >
	              <thead>
	                <tr>
										<th scope="col">ID</th>
                  	<th scope="col">Nombre</th>
                  	<th scope="col">Fecha Apertura</th>
                  	<th scope="col">Accion</th>
	                </tr>
	              </thead>
								<tbody>{columnas}</tbody>
	            </table>
	          </div>
	        </div>
	      </div>
	    </div>
		)
	}
}
