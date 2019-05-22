<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="../Style/style.css" />
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
                                <li ><a href="<?php echo $programa?>">Programa</a></li>
                                <li class="active"><a href="<?php echo $veraz?>">Veraz</a></li>
                                <li><a href="<?php echo $garantia?>">Garantía</a></li>
                                <li><a href="<?php echo $gastos?>">Gastos</a></li>
                                <li><a href="<?php echo $documentos?>">Documentos</a></li>
                                <li><a href="<?php echo $alertasV?>">Alertas de Vencimiento</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                            <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Veraz</h2>
                                </div>
                                <div class="Badge__section-info" >
                                  <h2 style="color:black; text-align: center; margin-top:0; padding-top:4px">Resumen General</h2>
                                    <form class="col-md-10 col-md-offset-1">
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Crédito N° </small>
                                                <small class="form-control" style="width: 100px; text-align: center;">32460</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Etapa </small>
                                                <small class="form-control"style="width: 200px; text-align: center;" >Solicitud</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Estado </small>
                                                <small class="form-control" style="width: 200px; text-align: center;">Firma Contrato</small>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small >Monto Otorgado  </small>
                                                <small class="form-control" style="width: 200px; text-align: center;">$ 100,000.00</small>
                                               
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Saldo Deudor</small>
                                                <small class="form-control" style="width: 200px; text-align: center;">$ 0.00</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Saldo a Favor</small>
                                                <small class="form-control" style="width: 200px; text-align: center;">$ 0.00</small>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Cuotas en Mora</small>
                                                <small class="form-control"style="width: 200px; text-align: center;" >0</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Morosidad</small>
                                                <small class="form-control"style="width: 200px; text-align: center;">$ 0.00</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Próximo Vencimiento:</small>
                                                <small class="form-control" style="width: 200px; text-align: center;">08/05/2019</small>
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
        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
