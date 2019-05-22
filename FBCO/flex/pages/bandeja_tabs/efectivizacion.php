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
        <link rel="stylesheet" type="text/css" href="../Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
        <title>Bandeja de Entrada & Seguimiento</title>
    </head>
    <body>
        <div class="container col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('../global/path.php');
                    $enlace_actual = $index;
                    include('../../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../../Components/Navtop.php');
                    ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                    <h1>Legajo Nro: <?php echo '32460 - CONRADO JAVIER BUSSO - Firma Contrato' ?></h1> 
                            </div>                      
                        </div>
                        <!-- Tabs para pestañas dentro de cada pagina -->
                        <div class="row">
                            <ul class="nav nav-tabs">
                            <?php include('../global/path.php'); 
                            ?>
                                <li ><a href="<?php echo $seguimiento?>">Seguimiento</a></li>
                                <li><a href="<?php echo $analisisC?>">Análisis Crediticio</a></li>
                                <li><a href="<?php echo $datosPer?>">Datos Personales</a></li>
                                <li><a href="<?php echo $datosFam?>">Datos Familiares</a></li>
                                <li><a href="<?php echo $datosEco?>">Datos Económicos</a></li>
                                <li><a href="<?php echo $datosEmp?>">Datos del Emprendimiento</a></li>
                                <li><a href="<?php echo $datosGar?>">Datos de Garantía</a></li>
                                <li><a href="<?php echo $datosBan?>">Datos Bancarios</a></li>
                                <li><a href="<?php echo $datosSeg?>">Datos Seguro</a></li>
                                <li><a href="<?php echo $informeAtm?>">Informe ATM</a></li>
                                <li><a href="<?php echo $condicionesC?>">Condiciones del Crédito</a></li>
                                <li><a href="<?php echo $evaluacionTecnica?>">Evaluar Técnicamente</a></li>
                                <li><a href="<?php echo $aprobacionGerencial?>">Aprobación Gerencial</a></li>
                                <li><a href="<?php echo $contrato?>">Contrato</a></li>
                                <li class="active"><a href="<?php echo $efectivizacion?>">Efectivización</a></li>
                                <li><a href="<?php echo $circuito?>">Circuito</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                            <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Efectivizacion</h2>
                                </div>
                                <div class="Badge__section-info" >
                                    <form class="col-md-9 col-md-offset-6">
                                        <div class="form-row" style="margin-right: 30px; margin-top:20px;">
                                            <div class="form-group col-sm-12 col-md-10 col-md-offset-1">
                                                <small>Forma de Efectivización </small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Cheque</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px; margin-top:30px;">
                                            <div class="form-group col-sm-12 col-md-2 ">
                                                <small>Fecha Primer Vencimiento </small>
                                                <input type="text" class="form-control" style="width: 110px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-10">
                                                <small>Fecha de Efectivización </small>
                                                <input type="text" class="form-control" style="width: 110px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px; margin-top:30px;">
                                            <div class="form-group col-sm-12 col-md-2 ">
                                                <small>Monto </small>
                                                <input type="text" class="form-control" style="width: 100px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2 ">
                                                <small>Número de Cheque </small>
                                                <input type="text" class="form-control" style="width: 100px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-row" style="margin-top:30px; margin-right: 30px;">
                                        <div class="form-group col-sm-12 col-md-6">
                                        <button class="btn btn-primary" style="width:200px">Guardar Cambios</button>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                        <button class="btn btn-secondary"style="width:200px">Ver Plan de Cuotas</button>
                                        </div>
                                    </div>
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
        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
