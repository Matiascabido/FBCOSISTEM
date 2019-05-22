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
        <link rel="stylesheet" type="text/css" href="./Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/> 
        <title>Impresion Masiva</title>
    </head>
    <body>
        <div class="container col-md-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('global/path.php');
                    $enlace_actual = $impresionmasiva;
                    include('../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../Components/Navtop.php');
                    ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7"> <h1>Impresión Masiva de Cuotas</h1> </div>                    
                        </div>
                        <div class="row">
                            <div class="Badge col-md-12">
                            <div class="Badge__header" style="height: 50px; border-radius: 8px 8px 8px 8px;">
                                    <h2 style="color:#f4f4f7; text-aling:center; margin-top:0; padding-top:4px">Filtros</h2>
                                </div>
                                <div class="Badge__section-info">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Nombre del Programa</small>
                                                <select class="form-control"><option value="">Todos</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                    <small>ATM</small>
                                                <select class="form-control"><option value="">Todos</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Fecha Desde</small>
                                                <input type="text"style="text-align: center;" class="form-control" id="numCredito" placeholder="Fecha Desde">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Fecha Hasta</small>
                                                <input type="text"style="text-align: center;" class="form-control" id="numCredito" placeholder="Fecha Hasta">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                    <button type="button" class="btn btn-primary">
                                                    Imprimir Cuotas al Día   
                                                </button>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <button type="button" class="btn btn-primary">
                                                    Imprimir Cuotas Vencidas
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script>$(document).ready(function() { $(".push_menu").click(function() 
        {$(".wrapper").removeClass("active");})
        ;});</script>
    </body>
</html>
