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
                                <li class="active"><a href="<?php echo $datosPer?>">Datos Personales</a></li>
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
                                <!-- TITULO DE LA SECCION -->
                                <div class="Badge__header" style="height: 50px;">
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Personales</h2>
                                </div>
                                <!-- FORMULARIO + BOTON GUARDAR -->
                                <div class="Badge__section-info" >
                                    <!-- FORMULARIO -->
                                    <form class="col-md-12 col-md-offset-4" style="margin-top:10px;">
                                        <!-- NOMBRE, APELLIDO, TIPO DOC, NUMERO DOC Y CUIT/CUIL -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Nombre </small>
                                                <input type="text" id="nombre" name="nombre" class="form-control" style="width: 160px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Apellido </small>
                                                <input type="text" id="apellido" name="apellido" class="form-control" style="width: 160px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Tipo Documento </small>
                                                <select class="form-control" id="tipoDocumento" name="tipoDocumento" style="width: 90px; height:30px; text-align: center;"><option value="">DNI</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-130px">
                                                <small>Numero Documento </small>
                                                <input type="text" id="numeroDocumento" name="numeroDocumento" class="form-control" style="width: 120px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-5" style="margin-left:-105px">
                                                <small>CUIL/CUIT  </small>
                                                <input type="text" class="form-control" style="width: 120px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <!-- FECHA DE NACIMIENTO, SEXO Y ESTADO CIVIL -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Fecha Nacimiento</small>
                                                <input type="text" id="fechaNacimiento" name="fechaNacimiento" class="form-control" style="width: 110px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Sexo </small>
                                                <select class="form-control" id="sexo" name="sexo" style="width: 120px; height:30px; text-align: center;"><option value="">Hermafrodita</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-8">
                                                <small>Estado Civil </small>
                                                <select class="form-control" id="estadoCivil" name="estadoCivil" style="width: 150px; height:30px; text-align: center;"><option value="">Soltero</option></select>
                                            </div>
                                        </div>
                                        <!-- CALLE, NRO.CALLE, PISO, MANZANA, LOTE, Dpto, BARRIO -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Calle </small>
                                                <input type="text" id="calle" name="calle" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1">
                                                <small>Nro. Calle</small>
                                                <input type="text" id="nroCalle" name="nroCalle" class="form-control" style="width:70px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-30px"> 
                                                <small>Piso </small>
                                                <input type="text" id="piso" name="piso" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-40px">
                                                <small>Manzana </small>
                                                <input type="text" id="manzana" name="manzana" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-40px" >
                                                <small>Lote </small>
                                                <input type="text" id="lote" name="lote" class="form-control" style="width:50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-1" style="margin-left:-40px" >
                                                <small>Dpto </small>
                                                <input type="text" id="dpto" name="dpto" class="form-control" style="width: 50px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-5" style="margin-left:-40px">
                                                <small>Barrio </small>
                                                <input type="text" id="barrio" name="barrio" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            
                                        </div>
                                        <!-- PAIS, PROVINCIA, DEPARTAMENTO Y LOCALIDAD -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-2" >
                                                <small>Pais </small>
                                                <select class="form-control" id="pais" name="pais" style="width: 120px; height:30px; text-align: center;"><option value="">Argentina</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" >
                                                <small>Provincia </small>
                                                <select class="form-control" id="provincia" name="provincia" style="width: 120px; height:30px; text-align: center;"><option value="">Córdoba</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2" style="margin-left:-60px">
                                                <small>Departamento </small>
                                                <select class="form-control" id="departamento" name="departamento"  style="width: 170px; height:30px; text-align: center;"><option value="">Marcos Júarez</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6" style="margin-left:-30px">
                                                <small>Localidad </small>
                                                <select class="form-control" id="localidad" name="localidad" style="width: 170px; height:30px; text-align: center;"><option value="">Monte Buey</option></select>
                                            </div>
                                            
                                        </div>
                                        <!-- TELEFONO FIJO, TELEFONO CELULAR Y EMAIL -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-10 col-md-2" >
                                                <small>Telefono Fijo </small>
                                                <input type="text" id="telefonoFijo" name="telefonoFijo" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Telefono Celular </small>
                                                <input type="text" id="telefonoCelular" name="telefonoCelular" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-8">
                                                <small>Email </small>
                                                <input type="text" id="email" name="email" class="form-control" style="width: 150px; height:30px; text-align: center;"/>
                                            </div>
                                        </div>
                                        <!-- TRABAJA?, FORMACION Y PROFESION -->
                                        <div class="form-row" style="margin-right: 30px;">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Trabaja? </small>
                                                <select class="form-control" id="trabaja" name="trabaja" style="width: 260px; height:30px; text-align: center;"><option value="">Trabaja solo en el Emprendimiento</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Formación </small>
                                                <select class="form-control" id="formacion" name="formacion" style="width: 180px; height:30px; text-align: center;"><option value="">Universitario Completo</option></select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Profesión </small>
                                                <select class="form-control" id="profesion" name="profesion" style="width: 130px; height:30px; text-align: center;"><option value="">Sin Profesión</option></select>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- BOTON PARA GUARDAR CAMBIOS -->
                                    <div class="row col-sm-12 col-md-12 col-md-offset-10" style="margin-top:30px">
                                        <button class="btn btn-primary">Guardar Cambios</button>
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
