"use strict";

/*
* Construye las columnas de forma dinamica
*/
var ColumnasDinamicas = function ColumnasDinamicas(props) {
  console.log(props.valores);
  return React.createElement(
    "tr",
    null,
    props.valores.map(function (vr, i) {
      return React.createElement("td", { dangerouslySetInnerHTML: {
          __html: vr
        } });
    })
  );
};