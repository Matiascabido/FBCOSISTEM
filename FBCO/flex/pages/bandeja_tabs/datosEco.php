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
                                <li class="active"><a href="<?php echo $datosEco?>">Datos Económicos</a></li>
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
                            <div class="Badge__header" style="height: 50px;">
                                <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Economicos</h2>
                            </div>
                            <div class="Badge__section-info" >
                            <div class="col-md-12" style="background-color:#CACFD2;">
                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px; ">Ingresos</h3>
                            </div>
                                <form class="col-md-10 col-md-offset-" style="margin-top:10px; ">
                                    <div class="form-row" style="margin-right: 30px; text-align:center;">
                                        <div class="form-group col-sm-12 col-md-4 " >
                                            <small>Ingresos del Emprendimiento </small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <small>Ingresos por otro/s trabajo/s del emprendedor </small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-right: 30px;text-align:center;">
                                        <div class="form-group col-sm-12 col-md-4">
                                            <small>Ingresos por rentas alquileres o similares</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <small>Ingresos por otro/s trabajo/s <br> de los integrantes de la familia </small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-right: 30px; text-align:center;">
                                        <div class="form-group col-sm-12 col-md-4">
                                            <small>Ingresos por becas programas de <br> empleo, asistencia universal por hijo o similares</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <small><br>Otros ingresos</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                    </div>
                                      </form>
                                      <div class="col-md-12" style="background-color:#CACFD2;">
                                          <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px; ">Egresos</h3>
                                      </div>
                                      <form class="col-md-10 col-md-offset-" style="margin-top:10px; text-align:center;">
                                    <div class="form-row" style="margin-right: 30px;">
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Alimentos</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Alquiler</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Impuestos</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Servicios (luz,agua,gas,teléfono)</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-right: 30px;">
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Otros creditos</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Movilidad, Transporte</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Indumentaria</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-3">
                                            <small>Otros gastos</small>
                                            <input type="text" class="center-block form-control"style="width: 90px; height:30px; text-align: center;"/>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <hr>
                                <h2 style="color:balck; text-align:center; margin-top:0; padding-top:4px">Patrimonio - Inmuebles</h2>
                            <div class="Badge__pagi">
                                <div class="row col-md-12 ">   
                                    <h4 style="color:balck; text-align:center; margin-top:0; padding-top:4px">Total $0.00</h4>
                                    <button class="btn btn-primary">Nuevo</button>
                                <table class="table">
                                        <thead class="black white-text">
                                            <tr>
                                            <th scope="col">NOMBRE Y APELLIDO</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">FECHA NACIMIENTO</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">DIRECCION</th>
                                            <th scope="col">TELEFONO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">MARTA GRACIELA PEREZ</th>
                                            <td>10293310</td>
                                            <td>19/03/1970</td>
                                            <td>lamarta@gmail.com</td>
                                            <td>General Paz 44</td>
                                            <td>035123123123</td>
                                            </tr>
                                        </tbody>
                                </table>
                                </div>
                            </div>
                                <h2 style="color:balck; text-align:center; margin-top:0; padding-top:10px">Patrimonio - Vehiculos</h2>
                            <div class="Badge__pagi">
                                <div class="row col-md-12 ">   
                                    <h4 style="color:balck; text-align:center; margin-top:0; padding-top:4px">Total $0.00</h4>
                                    <button class="btn btn-primary">Nuevo</button>
                                <table class="table">
                                        <thead class="black white-text">
                                            <tr>
                                            <th scope="col">NOMBRE Y APELLIDO</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">FECHA NACIMIENTO</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">DIRECCION</th>
                                            <th scope="col">TELEFONO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">MARTA GRACIELA PEREZ</th>
                                            <td>10293310</td>
                                            <td>19/03/1970</td>
                                            <td>lamarta@gmail.com</td>
                                            <td>General Paz 44</td>
                                            <td>035123123123</td>
                                            </tr>
                                        </tbody>
                                </table>
                                </div>
                            </div>
                            <hr>
                            <h2 style="color:balck; text-align:center; margin-top:0; padding-top:10px">Otros bienes durables</h2>
                            <div class="Badge__pagi">
                                <div class="form-group col-sm-12 col-md-12 col-md-offset-" style="text-align:center;" >
                                    <small>Otros bienes durables</small>
                                    <input type="text" class="center-block form-control" style="width: 200px; "/>
                                </div>
                            </div>
                            <hr>
                            <div class="Badge__pagi">
                                <div class="row col-md-12 col-md-offset-" style="margin-top:30px">   
                                  <button class="center-block btn btn-primary">Guardar Cambios</button>
                                </div>
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
