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
                                <li class="active"><a href="<?php echo $seguimiento?>">Seguimiento</a></li>
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
                                <li><a href="<?php echo $efectivizacion?>">Efectivización</a></li>
                                <li><a href="<?php echo $circuito?>">Circuito</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                            <div class="Badge">
                                <!-- TITULO -->
                                <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Seguimiento - Acciones</h2>
                                </div>
                                <div class="Badge__section-info" >
                                    <!-- TITULO DE LA SECCION -->
                                      <div class="col-md-12" style="background-color:#CACFD2;">
                                          <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Resumen General</h3>
                                      </div> 
                                    <!-- FORMULARIO -->
                                    <form class="col-md-10 "style="margin-top: 20px;">
                                        <!-- NUMERO DE CREDITO -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <!-- NUMERO DE CREDITO -->
                                            <div class="form-group col-sm-12 col-md-12">
                                                <small>Crédito N° </small>
                                                <small class="form-control" id="credito" name="credito" style="width: 100px; text-align: center;">32460</small>
                                            </div> 
                                        </div>
                                        <!-- ETAPA Y ESTADO -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Etapa </small>
                                                <small class="form-control" id="etapa" name="etapa" style="width: 200px; height:30px; text-align: center; font-size:12px" >Solicitud</small>
                                                </div>
                                            <div class="form-group col-sm-12 col-md-8">
                                                <small>Estado </small>
                                                <small class="form-control" id="estado" name="estado" style="width: 200px;height:30px; text-align: center;">Firma Contrato</small>
                                            </div>
                                        </div>
                                        <!-- MONTO OTORGADO, SALDO DEUDOR, SALDO A FAVOR Y MOROSIDAD -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small >Monto Otorgado  </small>
                                                <small class="form-control" id="montoOtorgado" name="montoOtorgado" style="width: 150px; height:30px; text-align: center;">$ 100,000.00</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Saldo Deudor</small>
                                                <small class="form-control" id="saldoDeudor" name="saldoDeudor" style="width: 150px; height:30px; text-align: center;">$ 0.00</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Saldo a Favor</small>
                                                <small class="form-control" id="saldoFavor" name="saldoFavor" style="width: 150px; height:30px; text-align: center;">$ 0.00</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Morosidad</small>
                                                <small class="form-control"id="morosidad" name="morosidad" style="width: 150px; height:30px; text-align: center;" >$ 0.00</small>
                                            </div>
                                        </div>
                                        <!-- CUOTAS EN MORA Y PROXIMO VENCIMIENTO -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Cuotas en Mora</small>
                                                <small class="form-control" id="cuotaMora" name="cuotaMora" style="width: 80px; height:30px; text-align: center;">0</small>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-auto ">
                                                <small>Próximo Vencimiento:</small>
                                                <small class="form-control" id="proximoVencimiento" name="proximoVencimiento" style="width: 100px; height:30px; text-align: center;">08/05/2019</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- SEGUNDA PARTE DEL SEGUIMIENTO -->
                                <div class="Badge__section-info" style="margin-top:-20px">
                                   <!-- BOTON PARA AGREGAR UNA NUEVA ACCION -->
                                    <div class="row col-md-12" > 
                                        <div class="col-md-4 col-md-offset-10">
                                            <button class="btn btn-primary">Nueva Accion</button>
                                        </div>
                                    <!-- PAGGINADO -->
                                    <div class="col-md-8 col-md-offset-4" style="margin-top:-10px;">
                                        <nav  aria-small="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>                             
                                </div>
                                  <!-- TABLA DE DATOS -->
                                <div class="Badge__pagi col-md-12">
                                    <!-- <table class="table" style="margin-top:20px;">
                                        <thead class="black white-text">
                                            <tr>
                                            <th scope="col">FECHA</th>
                                            <th scope="col">ETAPA</th>
                                            <th scope="col">ESTADO</th>
                                            <th scope="col">PROGRAMA</th>
                                            <th scope="col">TIPO DE ACCIÓN</th>
                                            <th scope="col">ACCIÓN</th>
                                            <th scope="col">OBSERVACIONES</th>
                                            <th scope="col">USUARIO</th>
                                            </tr>
                                        </thead >
                                        <tbody >
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Otto</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Otto</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Otto</td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                    <?php include('../Animations/loaderBandejaTabs.php')?>
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
