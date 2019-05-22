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
        <title>Programa Datos</title>
    </head>
    <body>
        <div class="container col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('../global/path.php');
                    $enlace_actual = $programas;
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
                                <li class="active"><a href="<?php echo $programa?>">Programa</a></li>
                                <li><a href="<?php echo $veraz?>">Veraz</a></li>
                                <li><a href="<?php echo $garantia?>">Garantía</a></li>
                                <li><a href="<?php echo $gastos?>">Gastos</a></li>
                                <li><a href="<?php echo $documentos?>">Documentos</a></li>
                                <li><a href="<?php echo $alertasV?>">Alertas de Vencimiento</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                            <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Programas</h2>
                                </div>
                                <div class="Badge__section-info" >
                                    <form class="col-md-10 col-md-offset-1">
                                        <div class="form-row" style="margin-right: 30px; text-align:center">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Código </small>
                                                <small class="center-block form-control" style="width:100px; height:35px; text-align: center;">32460</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2 col-md-offset-6" >
                                                <small>Vigente</small>
                                                <small class="center-block form-control" style="width: 150px; height:30px; text-align: center; background:green; color:white">SI</small>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-12">
                                                <small>Nombre </small>
                                                <small class="form-control"style="width:200px; height:30px; text-align: center;" >Solicitud</small>
                                            </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Fecha Vigencia </small>
                                                <small class="form-control" style="width: 110px; height:30px; text-align: center;">00/00/0000</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-10">
                                                <small>Fecha de Alta</small>
                                                <small class="form-control" style="width: 110px; height:30px; text-align: center;">00/00/0000</small>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row" style="margin-right: 30px; margin-top:30px">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Descripción</small>
                                                <textarea class="form-control" placeholder="N.A" ></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Prerequisitos</small>
                                                <textarea class="form-control" placeholder="N.A"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-1">
                                                <small>Aprobado</small>
                                                <select class="form-control" style="width: 90px; height:30px; text-align: center;"><option value="">SI</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Ministerios </small>
                                                <input type="text" class="form-control" style="width: 160px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Partida Asignada </small>
                                                <input type="text" class="form-control" style="width: 160px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Circuito Completo</small>
                                                <select class="form-control" style="width: 90px; height:30px; text-align: center;"><option value="">SI</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Tipo Documento </small>
                                                <select class="form-control" style="width: 90px; height:30px; text-align: center;"><option value="">DNI</option></select>
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
        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
