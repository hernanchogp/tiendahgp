"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var Tienda = function (_React$Component) {
	_inherits(Tienda, _React$Component);

	function Tienda(props) {
		_classCallCheck(this, Tienda);

		var _this = _possibleConstructorReturn(this, (Tienda.__proto__ || Object.getPrototypeOf(Tienda)).call(this, props));

		_this.eventoSubmit = _this.eventoSubmit.bind(_this);

		_this.state = {};
		return _this;
	}

	_createClass(Tienda, [{
		key: "eventoSubmit",
		value: function eventoSubmit(evento) {
			evento.preventDefault();
		}
	}, {
		key: "render",
		value: function render() {

			/*var columnas =this.props.tiendas.map((tienda, i) => (
     <ColumnasDinamicas valores={tienda} key={i} />
   ));//*/

			return React.createElement(
				"div",
				{ className: "card border-secondary mt-2" },
				React.createElement(
					"div",
					{ className: "card-header bg-secondary border-secondary text-white" },
					React.createElement("i", { "class": "fas fa-paperclip" }),
					"\xA0 Listado de Tiendas"
				),
				React.createElement(
					"div",
					{ className: "card-body" },
					React.createElement(
						"div",
						{ className: "row m-2" },
						React.createElement(
							"div",
							{ "class": "table-responsive" },
							React.createElement(
								"table",
								{
									"class": "table text-center",
									id: "datatablesinscripciones",
									className: "table table-bordered table-striped table-responsive-sm table-hover small table-sm w-100"
								},
								React.createElement(
									"thead",
									null,
									React.createElement(
										"tr",
										null,
										React.createElement(
											"th",
											{ scope: "col" },
											"ID"
										),
										React.createElement(
											"th",
											{ scope: "col" },
											"Nombre"
										),
										React.createElement(
											"th",
											{ scope: "col" },
											"Fecha Apertura"
										),
										React.createElement(
											"th",
											{ scope: "col" },
											"Accion"
										)
									)
								)
							)
						)
					)
				)
			);
		}
	}]);

	return Tienda;
}(React.Component);