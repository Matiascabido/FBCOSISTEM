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
                                <li class="active"><a href="<?php echo $datosEmp?>">Datos del Emprendimiento</a></li>
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
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Emprendimiento</h2>
                                </div>
                                <ul class="nav nav-tabs">
                            <?php include('../global/path.php'); 
                            ?>
                                <li><a href="<?php echo $cli_pro_com_for?>">Cliente - Proveedores - Competidores - Fortalezas</a></li>
                                <li><a href="<?php echo $inv_deu_inv_for?>">Inversiones - Deudas - Inversiones a Realizar - Formas de Financiar</a></li>
                                <li><a href="<?php echo $resultadosEco?>">Resultados Económicos</a></li>
                            </ul>
                                <div class="Badge__section-info" >
                                    <form class="col-md-12 col-md-offset-1" style="padding-top: 30px;">
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Nombre Emprendimiento </small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Tipo Emprendimiento </small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Individual</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Situación del Emprendimiento </small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">En Marcha</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Fecha de Inicio de Actividades </small>
                                                <input type="text" class="form-control" style="width: 100px; height:30px; text-align: center;"/>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Razon Social</small>
                                                <input class="form-control" style="width: 150px; height:30px; text-align: center;" placeholder="N.A"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-9">
                                                <small>Condiciones Frente al IVA</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Monotributo</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Actividad Principal</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Produccion</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Actividad Secundaria</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">SIN DATOS</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Productos Principales</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Experiencia</small>
                                                <textarea type="text" class="form-control" style="width: 545px; text-align: center; margin-left: 0px; margin-right: 116px;"></textarea>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Descripcion del Proyecto</small>
                                                <textarea type="text" class="form-control" style="width: 545px; text-align: center; margin-left: 0px; margin-right: 116px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Calle </small>
                                                <input type="text" class="form-control" style="width: 200px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1">
                                                <small>Nro. Calle</small>
                                                <input type="text" class="form-control" style="width:70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-30px"> 
                                                <small>Piso </small>
                                                <input type="text" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-40px">
                                                <small>Manzana </small>
                                                <input type="text" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-40px" >
                                                <small>Lote </small>
                                                <input type="text" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-45px" >
                                                <small>Dpto </small>
                                                <input type="text" class="form-control" style="width: 50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-38px">
                                                <small>Codigo Postal</small>
                                                <input type="text" class="form-control" style="width: 70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-5">
                                                <small>Barrio </small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2" >
                                                <small>Pais </small>
                                                <select class="form-control" style="width: 120px; height:30px; text-align: center;"><option value="">Argentina</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" >
                                                <small>Provincia </small>
                                                <select class="form-control" style="width: 120px; height:30px; text-align: center;"><option value="">Córdoba</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-60px">
                                                <small>Departamento </small>
                                                <select class="form-control" style="width: 170px; height:30px; text-align: center;"><option value="">Marcos Júarez</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6" style="margin-left:-30px">
                                                <small>Localidad </small>
                                                <select class="form-control" style="width: 170px; height:30px; text-align: center;"><option value="">Monte Buey</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2" >
                                                <small>Telefono Fijo</small>
                                                <input type="text" class="form-control" style="width: 120px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-10" >
                                                <small>Telefono Celular </small>
                                                <input type="text" class="form-control" style="width: 120px; height:30px; text-align: center;"/>
                                            </div>
                                             
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Horario Mañana Desde</small>
                                                <input type="text" class="form-control" style="width: 70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-60px" >
                                                <small>Horario Mañana Hasta </small>
                                                <input type="text" class="form-control" style="width: 70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-50px">
                                                <small>Horario Tarde Dede </small>
                                                <input type="text" class="form-control" style="width: 70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6" style="margin-left:-50px">
                                                <small>Horario Tarde Hasta</small>
                                                <input type="text" class="form-control" style="width: 70px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>E-Mail</small>
                                                <input type="text" class="form-control" style="width: 200px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3" style="margin-left:-100px">
                                                <small>Pagina Web</small>
                                                <input type="text" class="form-control" style="width: 200px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-100px">
                                                <small>Twitter</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Facebook</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Otro</small>
                                                <input type="text" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right: 30px;">
                                           
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Inmueble Utilizado</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">N.A</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Forma Comercializacion</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Venta Directa</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Localizacion del Emprendimiento</small>
                                                <select class="form-control" style="width: 150px; height:30px; text-align: center;"><option value="">Zona Urbana</option></select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="Badge__section-info" style="margin-top:50px">
                                        <button class="btn btn-primary">Guardar Cambios</button>
                                    </div>
                                    <hr>
                                </div>

                                <div class="Badge__pagi">
                                       <!-- Incluir Mapa de Google Maps -->
                                            <div class="form-group col-sm-12 col-md-12 col-md-offset-3">
                                                <h1>---MAPA DE GOOGLE MAPS---</h1>
                                            </div>
                                        <!-- Incluir Mapa de Google Maps -->
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
