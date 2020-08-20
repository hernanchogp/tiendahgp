<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Forzar a no leer cache -->
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <!--Cambio de Etiqueta para acentos en las palabras del texto:
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

        <!-- Styles -->

        <!--Styles-->
        <link href="../recursos/css/lib/datepicker.min.css" rel="stylesheet"/>
        <link href="../recursos/js/lib/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="../recursos/js/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />


        <link href="../recursos/css/font-awesome/css/all.min.css" rel="stylesheet" type="text/css"/>


        <title>.:: Prueba Tecnica Hernan Gonzalez Poloche ::.</title>
    </head>

    <body class="bg-faded">


        <div class="navbar bg-dark navbar-default"  role="navigation">>
            <div class="container d-flex justify-content-between">
                <a id="tituloSistema" href="javascript:;" class="navbar-brand text-white">Tienda - Prueba Tecnica</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white;">
                    <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse"  id="navbarHeader" style="background-color:#d4d4d4;">
           <div class="container d-flex justify-content-between">
   <ul class="nav navbar-nav">
     <li class="active"><a href="#"><i class="fas fa-store"></i> Tiendas</a></li>
     <li><a href="#"><i class="fas fa-barcode"></i> Productos</a></li>
   </ul>


 </div>

 </div>

        <section class="text-center bg-white" style="padding-bottom:1rem !important;">
            <div class="container">
                <img id="logoconfe" class="rounded mx-auto" src="../recursos/images/logo.jpg" width="300" height="220">
                <h1 class="jumbotron-heading">Tienda HGP</h1>
                <p class="lead text-muted" id="instrucciones1">Se desea almacenar la información de tiendas y de los productos en cada tienda.</p>
            </div>
        </section>


        <div id="container">


            <main role="main" class="row" style="margin-top: 1%;margin-left: auto;">
              <div  class="col-1 col-sm-1 col-md-1">

              </div>

                <div id="seccionCentral" class="col-12 col-sm-12 col-md-12 col-lg-10">


                        <div id="bodycontenido">

                        </div>



                </div>

                <div  class="col-1 col-sm-1 col-md-1">

                </div>

            </main>
            <!-- Loader -->
            <center>
                <div class="modal fade" id="modalLoader" style="top:38%;" tabindex="-1" role="dialog" aria-labelledby="modalLoader" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog" role="document">
                        <div class="loader"></div>
                    </div>
                </div>
            </center>
            <div id="divAuxiliar" class="w-100"></div>
            <div class="clearfix"></div>
            <?php require 'layout/footer.php'; ?>


        <script src="../recursos/js/lib/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../recursos/js/lib/jquery-ui.min.js"></script>
        <script src="../recursos/js/lib/popper.min.js" type="text/javascript"></script>
        <script src="../recursos/js/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../recursos/js/lib/bootbox.min.js"></script>
        <script src="../recursos/js/lib/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="../recursos/js/lib/holder.min.js"></script>
        <script src="../recursos/js/lib/react.min.js"></script>
        <script src="../recursos/js/lib/react-dom.min.js"></script>
        <script src="../recursos/js/lib/datepicker.min.js"></script>
        <script src="../recursos/js/lib/datepicker.es-ES.js"></script>
        <script type="text/javascript" src="../recursos/js/tienda/elementos_react.js"></script>
        <script type="text/javascript" src="../recursos/js/tienda/tienda.js"></script>
        <script type="text/javascript" src="../recursos/js/tienda/tiendaComponente.js"></script>
        <script type="text/javascript" src="../recursos/js/tienda/index.js"></script>


    </body>

</html>
