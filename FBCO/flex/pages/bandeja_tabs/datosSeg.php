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
                                <li class="active"><a href="<?php echo $datosSeg?>">Datos Seguro</a></li>
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
                            <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Seguro</h2>
                                </div>
                                <div class="Badge__section-info" >
                                    <form class="col-md-12 col-md-offset-8">
                                        <div class="form-row" style="margin-right: 30px; margin-top:20px">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Compañía de Seguros</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                            <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Sancor Seguros</option></select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px; margin-top:10px">
                                        <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Beneficiario</h3>
                                    </div>
                                    <form class="col-md-12 col-md-offset-5">
                                        <div class="form-row" style="margin-right: 30px; margin-top:10px">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small >Nombre</small>
                                                <input type="text" class="form-control" style="width: 200px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Apellido</small>
                                                <input type="text" class="form-control" style="width: 200px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Tipo Documento</small>
                                                <select class="form-control" style="width: 70px; height:30px; text-align: center;"><option value="">DNI</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6" style="margin-left:-120px">
                                                <small >Numero de Documento</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-12">
                                                <small>Parentesco</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Cónyuge</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Telefono Contacto 1</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-8" style="margin-left:-50px">
                                                <small>Telefono Contacto 2</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3" >
                                                <small>Fecha Solicitud Adhesión</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row col-md-8 col-md-offset-6" style="margin-top:10px">   
                                        <button class="btn btn-primary">Guardar Cambios</button>
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
