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
        <link rel="stylesheet" href="../Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                                <li class="active"><a href="<?php echo $informeAtm?>">Informe ATM</a></li>
                                <li><a href="<?php echo $condicionesC?>">Condiciones del Crédito</a></li>
                                <li><a href="<?php echo $evaluacionTecnica?>">Evaluar Técnicamente</a></li>
                                <li><a href="<?php echo $aprobacionGerencial?>">Aprobación Gerencial</a></li>
                                <li><a href="<?php echo $contrato?>">Contrato</a></li>
                                <li><a href="<?php echo $efectivizacion?>">Efectivización</a></li>
                                <li><a href="<?php echo $circuito?>">Circuito</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                            <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Informe ATM</h2>
                                </div>
                                <div class="Badge__section-info" >
                                    <form class="col-md-12 col-md-offset-2 ">
                                        <div class="form-row" style="margin-right: 30px; margin-top:30px">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>1. Situación Socio-Familiar del empleador</small>
                                                <textarea class="form-control" placeholder="N.A" ></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>2. Aptitudes y actitudes del solicitante como microemprendedor</small>
                                                <textarea class="form-control" placeholder="N.A"></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>3. Caracteristicas del proyecto</small>
                                                <textarea class="form-control" placeholder="N.A"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>4. Eval. de viabilidad del proyecto y fundamentación</small>
                                                <textarea class="form-control" placeholder="N.A" ></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>5. Necesidad e inversión requeridad por la microempresa</small>
                                                <textarea class="form-control" placeholder="N.A"></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>6. Sugerencias particulares del apoyo crediticio</small>
                                                <textarea class="form-control" placeholder="N.A"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6 col-md-offset-2" style="margin-right: 30px; text-align:center;">
                                            <small>Fecha Informe ATM</small>
                                            <input type="text" class="center-block form-control" style="width: 110px; text-align: center;"/>
                                        </div>
                                    </form>
                                    <div class="row col-md-4 col-md-offset-" style="margin-top:50px">   
                                        <button class="center-block btn btn-primary">Guardar Cambios</button>
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
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
