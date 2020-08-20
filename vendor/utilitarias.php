<?php

class Utilitarias
{

    /**
     * Utilitarias::cUrl()
     *
     * Metodo encargado de realizar la peticion al API de manera que se consuma
     * de manera satisfactoria y unificada en el sistema
     *
     * @param  mixed[] $data   Datos tipo Json que conforman los datos de peticion
     * @param  string  $metodo cadena de caracteres asociado al metodo del API que se desea acceder
     * @return mixed[] $result Datos tipo Json que conforman los datos de respuesta
     */
    public static function cUrl($data, $metodo)
    {
        $url = HOST_API;
            
        if ($url) {
            $json_data = json_encode($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url . "/" . $metodo);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $result = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
            if (($result) == false || ($result) == null) {
                return json_encode(array('codigo' => "504", 'mensaje' => "Error en curl"));
            } else {
                return json_decode($result, true);
            }
        } else {
            return json_encode(array('codigo' => "504", 'mensaje' => "No se configuro constante HOST_API"));
        }
    }

  public static function setResponse($param)
   {

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: POST");
       header("Access-Control-Max-Age: 3600");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
       if (is_array($param)) {
           print_r(json_encode($param));
       } else {
           echo $param;
       }

   }



  public static function redireccionarMetodos($c, $m)
   {

           if (is_callable(array($c, $m))) {
               return call_user_func(array($c, $m));
           } else {
               return Utilitarias::getErrMetodo();
           }

   }
}

 ?>
