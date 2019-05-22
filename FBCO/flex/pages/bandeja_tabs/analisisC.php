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
                                <li class="active"><a href="<?php echo $analisisC?>">Análisis Crediticio</a></li>
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
                                <li><a href="<?php echo $efectivizacion?>">Efectivización</a></li>
                                <li><a href="<?php echo $circuito?>">Circuito</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                                <!-- TITULO -->
                                <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Analisis Crediticio</h2>
                                </div>
                                <!-- FORMULARIO 1-->
                                <div class="Badge__section-info" >
                                   <!-- TITULO DEL SEGMENTO -->
                                    <div class="col-md-12" style="background-color:#CACFD2;">
                                        <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Datos Programa</h3>
                                    </div>       
                                    <!-- FORMULARIO 1 -->
                                    <form class="col-md-10 col-md-offset-">
                                        <!-- SCORE, TUVO CREDITO, TIENE DEUDA  12 Y TIENE DEUDA  ACTUAL-->
                                        <div class="form-row" style="margin-top:30px; margin-right: 30px;text-align:center;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Score </small>
                                                <small class="center-block form-control" id="score" name="score" style="width: 100px; text-align: center;">500</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Tuvo Crédito </small>
                                                <small class="center-block form-control" id="tuvoCredito" name="tuvoCredito" style="width: 100px; text-align: center;" >Si</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small >Tiene deuda 12 meses </small>
                                                <small class="center-block form-control" id="tieneDeuda" name="tieneDeuda" style="width: 100px; text-align: center;">No</small>
                                            
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Tiene deuda actual </small>
                                                <small class="center-block form-control" id="tieneDeudaA" name="tieneDeudaA" style="width: 100px; text-align: center;">No</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- BOTON DE CONSULTAR SCORE -->
                                <div class="Badge__pagi">
                                    <div class="row col-md-12" style="margin-left:190px; margin-top:30px">
                                        <button class="btn btn-primary">Consultar Score</button>
                                    </div>
                                </div>
                                <!-- FORMULARIO 2 -->
                                <div class="Badge__section-info">
                                        <!-- TITULO DE LA SECCION -->
                                        <div class="col-md-12" style="background-color:#CACFD2;">
                                          <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Datos Score</h3>
                                        </div>   
                                        <!-- FORMULARIO 2 -->
                                        <form class="col-md-10 col-md-offset- ">
                                            <!-- SCORE, TUVO CREDITO, TIENE DEUDA 12 Y TIENE DEUDA ACUTAL -->
                                            <div class="form-row" style="margin-top:30px; margin-right: 30px;text-align:center;">
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small>Score </small>
                                                    <small class="center-block form-control" id="Score" name="Score" style="width: 100px; text-align: center; background:green; color:white">664</small>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small>Tuvo Crédito </small>
                                                    <small class="center-block form-control" id="TuvoCredito" name="TuvoCredito" style="width: 100px; text-align: center;background:green; color:white" >OK</small>
                                                </div>
                                                
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small >Tiene deuda 12 meses </small>
                                                    <small class="center-block form-control" id="TieneDeuda" name="TieneDeuda" style="width: 100px; text-align: center;background:green; color:white">Si</small>
                                                
                                                </div>
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small>Tiene deuda actual </small>
                                                    <small class="center-block form-control" d="TieneDeudaA" name="TieneDeudaA" style="width: 100px; text-align: center;background:red; color:white">2</small>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                                <!-- FORMULARIO 3 + BOTONES PARA APROBAR, OBSERVAR Y RECHAZAR -->
                                <div class="Badge__section-info">
                                    <!-- FORMULARIO 3 -->
                                    <form class="col-md-10 col-md-offset-3">
                                        <!-- OBSERVACIONES -->
                                        <div class="form-row" style="margin-top:30px; margin-right: 30px;text-align:center;">
                                            <div class="form-group col-sm-12 col-md-8">
                                                <small>Observaciones</small>
                                                <textarea class="center-block form-control" id="obs" name="obs" style="margin-left: 0px; margin-right: -516px; width: 772px;"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- BOTONES DE APROBAR, OBSERVAR Y RECHAZAR -->
                                    <div class="form-row" style="margin-top:30px; margin-right: 30px;">
                                        <div class="form-group col-sm-12 col-md-4">
                                        <button class="btn btn-primary" style="width:200px">Aprobar</button>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                        <button class="btn btn-primary"style="width:200px">Observar</button>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                        <button class="btn btn-primary"style="width:200px">Rechazar</button>
                                        </div>
                                    </div>
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
