class Tienda extends React.Component{
	constructor(props){
		super(props);
		this.eventoSubmit = this.eventoSubmit.bind(this);


	}

	eventoSubmit(evento){
		evento.preventDefault();

	}

	render(){

		return(
			<div id="test" className="container">
				texto
			</div>
		)
	}
}
