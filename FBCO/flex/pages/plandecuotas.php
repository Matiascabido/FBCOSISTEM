<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="./Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/> 
        <title>Plan de Cuotas</title>
    </head>
    <body>
        <div class="container col-md-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('global/path.php');
                    $enlace_actual = $plandecuotas;
                    include('../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../Components/Navtop.php');
                    ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7"><h1>Plan de Cuotas</h1></div>                   
                        </div>
                        <div class="row">
                            <div class="Badge col-md-12">
                            <div class="Badge__header" style="height: 50px; border-radius: 8px 8px 8px 8px;">
                                    <h2 style="color:#f4f4f7; text-aling:center; margin-top:0; padding-top:4px">Filtros</h2>
                                </div>
                                <div class="Badge__section-info">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>N° Credito</small>
                                                <input type="text"style="text-align: center;" class="form-control" id="numCredito" placeholder="Numero de Credito">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Nombre</small>
                                                <input type="datetime"style="text-align: center;"  class="form-control" id="nombre" placeholder="Nombre">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Apellido</small>
                                                <input type="text" style="text-align: center;" class="form-control" id="apellido" placeholder="Apellido">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>DNI</small>
                                                <input type="text"style="text-align: center;" class="form-control" id="dni" placeholder="DNI">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>N° Cupon </small>
                                                <input type="datetime"style="text-align: center;"  class="form-control" id="numCupon" placeholder="Número de Cupón">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>N° Cuota</small>
                                                <input type="text" style="text-align: center;" class="form-control" id="numCuota" placeholder="Número de Cuota">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-9">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="material-icons md-18">search</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="Badge__pagi">
                                </div>
                                <div class="Badge__footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>$(document).ready(function() { $(".push_menu").click(function() 
        {$(".wrapper").removeClass("active");})
        ;});</script>
    </body>
</html>
