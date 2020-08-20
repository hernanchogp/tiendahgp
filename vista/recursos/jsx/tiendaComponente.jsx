class Tienda extends React.Component{
	constructor(props){
		super(props);
		this.eventoSubmit = this.eventoSubmit.bind(this);

		this.state = {

	 }
	}

	eventoSubmit(evento){
		evento.preventDefault();

	}

	render(){

		/*var columnas =this.props.tiendas.map((tienda, i) => (
    <ColumnasDinamicas valores={tienda} key={i} />
  ));//*/

		return(
			<div className="card border-secondary mt-2">
	      <div className="card-header bg-secondary border-secondary text-white">
	        <i class="fas fa-paperclip" />&nbsp; Listado de Tiendas
	      </div>
	      <div className="card-body">
	        <div className="row m-2">
	          <div class="table-responsive">
	            <table
	              class="table text-center"
	              id="datatablesinscripciones"
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

	            </table>
	          </div>
	        </div>
	      </div>
	    </div>
		)
	}
}
