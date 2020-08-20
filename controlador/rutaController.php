<?php
require_once realpath(__DIR__) . '/../controlador/tiendaController.php';
require_once realpath(__DIR__) . '/../vendor/utilitarias.php';
require_once realpath(__DIR__) . '/../configuracion/config.php';
class rutaController
{
  private $metodo;
  private $controlador;
  public function __construct()
    {
       if (isset($_POST['x_m']) && isset($_POST['x_c'])) {
            $this->metodo = $_POST['x_m'];
               $this->controlador = $_POST['x_c'];

               //echo  " -> " . $this->controlador. " -> " .$this->metodo;
               rutaController::index();
        } else {
           if (isset($_GET['x_m']) && isset($_GET['x_c'])) {
                $this->metodo = $_GET['x_m'];
                $this->controlador = $_GET['x_c'];
                rutaController::index();
            } else {
                $msj = array("codigoerror" => "504", "mensajeerror" => "Variables requeridas no fueron recibidas!");
                return Utilitarias::setResponse(json_encode($msj));
            }
        }
    }


    public function index()
   {


     if (is_callable(array($this->controlador, $this->metodo))) {

        return rutaController::direccionarControlador($this->controlador, $this->metodo);

     } else {
      $dataRespuesta = array('mensajeerror' => "No se encuentra -> Controlador: " .$this->controlador . " Método: " .  $this->metodo);
         return Utilitarias::setResponse(json_encode($dataRespuesta),  $this->metodo);
    }

   }

   public function direccionarControlador($controlador, $metodo)
   {

       if (is_callable(array($controlador, $metodo))) {

            $ruta= mt_rand(0, 10000000);

             return Utilitarias::setResponse(call_user_func_array(array($controlador, $metodo), array($ruta, $metodo)), $metodo);
       } else {
           $dataRespuesta = array('mensajeerror' => "No se encuentra -> Controlador: " .$controlador . " Método: " . $metodo);
          return Utilitarias::setResponse(json_encode($dataRespuesta), $metodo);
       }
   }

}

$peticion = new rutaController();

 ?>
