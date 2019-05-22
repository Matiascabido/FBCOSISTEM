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
        <link rel="stylesheet" type="text/css" href="../../Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
        <title>Bandeja de Entrada & Seguimiento</title>
    </head>
    <body>
        <div class="container col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('../../global/path.php');
                    $enlace_actual = $index;
                    include('../../../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../../../Components/Navtop.php');
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
                            <?php include('../../global/path.php'); 
                            ?>
                                <li ><a href="<?php echo $seguimiento?>">Seguimiento</a></li>
                                <li><a href="<?php echo $analisisC?>">Análisis Crediticio</a></li>
                                <li><a href="<?php echo $datosPer?>">Datos Personales</a></li>
                                <li><a href="<?php echo $datosFam?>">Datos Familiares</a></li>
                                <li><a href="<?php echo $datosEco?>">Datos Económicos</a></li>
                                <li class="active"><a href="<?php echo $datosEmp?>">Datos del Emprendimiento</a></li>
                                <li><a href="<?php echo $datosGar?>">Datos de Garantía</a></li>
                                <li><a href="<?php echo $datosBan?>">Datos Bancarios</a></li>
                                <li><a href="<?php echo $datosSeg?>">Datos Seguro</a></li>
                                <li><a href="<?php echo $informeAtm?>">Informe ATM</a></li>
                                <li><a href="<?php echo $condicionesC?>">Condiciones del Crédito</a></li>
                                <li><a href="<?php echo $evaluarTec?>">Evaluar Técnicamente</a></li>
                                <li><a href="<?php echo $circuito?>">Circuito</a></li>
                            </ul>
                        </div> 
                        <div class="row">
                                <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Emprendimiento</h2>
                                </div>
                                <ul class="nav nav-tabs">
                            <?php include('../../global/path.php'); 
                            ?>
                                <li><a href="<?php echo $cli_pro_com_for?>">Cliente - Proveedores - Competidores - Fortalezas</a></li>
                                <li class="active"><a href="<?php echo $inv_deu_inv_for?>">Inversiones - Deudas - Inversiones a Realizar - Formas de Financiar</a></li>
                                <li><a href="<?php echo $resultadosEco?>">Resultados Económicos</a></li>
                            </ul>
                            <div class="Badge" style="margin-top:-200px;">
                                <div class="Badge__section-info" >
                                    <div class="row col-md-12 " style="margin-top:30px;">  
                                        <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px;">
                                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Inversiones Existentes</h3>
                                        </div> 
                                        <button class="btn btn-primary">Nuevo</button>
                                        <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">ACCION</th>
                                                    <th scope="col">TIPO INVERSIÓN</th>
                                                    <th scope="col">NOMBRE</th>
                                                    <th scope="col">USO</th>
                                                    <th scope="col">PRECIO</th>
                                                    <th scope="col">CANTIDAD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">
                                                        <div class="dropdown">
                                                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                            <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                            <li class="active"><a href="#">Ver / Editar</a></li>
                                                            <li ><a href="#">Next</a></li>
                                                            <li class="disabled"><a href="#">Eliminar</a></li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>Equipo</td>
                                                    <td>HERRAMIENTAS DE TRABAJO E INSUMOS</td>
                                                    <td>Nuevo</td>
                                                    <td>$9,000.00</td>
                                                    <td>1</td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    <div class="row col-md-12 ">   
                                        <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px;">
                                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Deudas</h3>
                                        </div>
                                        <button class="btn btn-primary">Nuevo</button>
                                        <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">ACCION</th>
                                                    <th scope="col">NOMBRE</th>
                                                    <th scope="col">LOCALIDAD</th>
                                                    <th scope="col">%VENTAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">No hay datos</th>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    <div class="row col-md-12 ">   
                                        <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px;">
                                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Inversiones a Realizar</h3>
                                        </div>
                                        <button class="btn btn-primary">Nuevo</button>
                                        <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">ACCION</th>
                                                    <th scope="col">TIPO INVERSIÓN</th>
                                                    <th scope="col">NOMBRE</th>
                                                    <th scope="col">USO</th>
                                                    <th scope="col">PRECIO</th>
                                                    <th scope="col">CANTIDAD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">
                                                        <div class="dropdown">
                                                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                            <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                            <li class="active"><a href="#">Ver / Editar</a></li>
                                                            <li ><a href="#">Next</a></li>
                                                            <li class="disabled"><a href="#">Eliminar</a></li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>Equipo</td>
                                                    <td>HERRAMIENTAS DE TRABAJO E INSUMOS</td>
                                                    <td>Nuevo</td>
                                                    <td>$9,000.00</td>
                                                    <td>1</td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    <div class="row col-md-12 ">   
                                        <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px;">
                                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Forma de Financiamiento del Emprendimiento</h3>
                                        </div>
                                        <form class="col-md-12 col-md-offset-1" style="padding-top: 30px; "> 
                                            <div class="form-row" style="margin-right: 30px; ">
                                                <div class="form-group col-sm-12 col-md-4">
                                                    <small>Recursos Propios</small>
                                                    <input type="text" class="form-control" style="width: 200px; text-align: center;"/>
                                                    <small>9.09 %</small>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-4">
                                                    <small>Recursos Terceros</small>
                                                    <input type="text" class="form-control" style="width: 200px; text-align: center;"/>
                                                    <small>0.00 %</small>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-4">
                                                    <small>Creditos</small>
                                                    <input type="text" class="form-control" style="width: 200px; text-align: center;"/>
                                                    <small>90.91 %</small>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="Badge__section-info" style="margin-top:50px">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>        
        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
