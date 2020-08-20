/*
* Construye las columnas de forma dinamica
*/
const ColumnasDinamicas = props => {
	console.log(props.valores);
  return (
    <tr>
      {(  props.valores.map((vr, i) => (

          <td dangerouslySetInnerHTML={{
            __html: vr
          }}></td>
        )))}
    </tr>
  );
};
