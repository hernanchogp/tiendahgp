<?php


  class tiendaController extends rutaController
{

  public function getTiendas()
    {
        $dataRespuesta = Utilitarias::cUrl('', "consultaTiendas");
        return (json_encode($dataRespuesta));
    }

}

?>
