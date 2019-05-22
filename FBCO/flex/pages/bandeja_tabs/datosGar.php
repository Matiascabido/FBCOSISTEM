<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        < <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                                <li><a href="<?php echo $datosEmp?>">Datos del Emprendimiento</a></li>
                                <li class="active"><a href="<?php echo $datosGar?>">Datos de Garantía</a></li>
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
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Garantia</h2>
                                </div>
                                    <div class="Badge__section-info" >
                                        <form class="col-md-10 col-md-offset-5">
                                            <div class="form-row" style="margin-right: 30px; margin-top:30px;">
                                                <div class="form-group col-sm-12 col-md-4 ">
                                                    <small>MODALIDAD </small>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-4">
                                                    <select class="form-control" style="width: 200px; height:30px; text-align: center;"><option value="">Recibo de Sueldo</option></select>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Garante</button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <!-- CONTENIDO DEL MODAL -->
                                            <div class="modal-content">
                                                <!-- CABEZERA -->
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Emprendedor</h4>
                                                </div>
                                                <!-- MODAL -->
                                                    <div class="modal-body">
                                                      <!-- FORMULARIO -->
                                                        <div class="row">
                                                            <!-- NOMBRE Y APELLIDO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="Nombre" name="Nombre" style="width: 250px; height:30px; text-align: center;">
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name" >Apellido</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="Apellido" name ="Apellido" style="width: 250px; height:30px; text-align: center;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- TIPO DOCUMENTO Y NUMERO DE DOCUMENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Tipo de Documento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="tipoDocumento" name="tipoDocumento" style="width: 70px; height:30px; text-align: center;"><option value="">DNI</option></select>                                               
                                                            </div> 
                                                            <div class="md-form col-md-5">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Numero de Documento</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="numeroDocumento" name="numeroDocumento" style="width: 120px; height:30px; text-align: center;">
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <!-- FECHA DE NACIMIENTO Y SEXO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Fecha de Nacimiento</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 100px; height:30px; text-align: center;">
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Sexo</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="sexo" name="sexo" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- PAIS EMPRENDIMIENTO Y PROVINCIA EMPRENDIMIENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Pais </label>
                                                                <select id="orangeForm-name" class="form-control validate" id="paisEmprendimiento" name="paisEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Provincia</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="pciaEmprendimiento" name="pciaEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <!-- DEPARTAMENTO EMPRENDIMIENTO Y LOCALIDAD EMPRENDIMIENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Departamento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="dtoEmprendimiento" name="dtoEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Localidad</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="locEmprendimiento" name="locEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- BARRIO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Barrio</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 200px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- CALLE -->
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Calle</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width:180px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- NUMERO -->
                                                            <div class="md-form col-md-2">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Nro</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 70px; height:30px; text-align: center;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- PISO -->
                                                            <div class="md-form col-md-1">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Piso</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 50px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- DEPARTAMENTO -->
                                                            <div class="md-form col-md-1">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Dto</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 50px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- MANANA -->
                                                            <div class="md-form col-md-1">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Manz.</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 50px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- LOTE -->
                                                            <div class="md-form col-md-1">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Lote</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 50px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- CODIGO POSTAL -->
                                                            <div class="md-form col-md-2">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">C.P.</label>
                                                                <input type="email" id="orangeForm-email" class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 70px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- TELEFONO FIJO -->
                                                            <div class="md-form col-md-3">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Tel Fijo</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 130px; height:30px; text-align: center;">
                                                            </div>
                                                            <!-- TELEFONO CELULAR -->
                                                            <div class="md-form col-md-3">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Tel Cel</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 130px; height:30px; text-align: center;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- EMAIL -->
                                                            <div class="md-form col-md-10">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 200px; height:30px; text-align: center;">
                                                            </div>
                                                        </div>
                                                        <!-- FORMULARIO EMPLEADOR -->
                                                        <div class="row">
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre Empleador</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 200px; height:30px; text-align: center;">
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Domicilio Empleador</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 200px; height:30px; text-align: center;">
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Sueldo Bruto</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 200px; height:30px; text-align: center;">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <!-- BOTONES DE CERRAR Y GUARDAR -->
                                                     <div class="modal-footer" >
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Nuevo Emprendedor</button>
                                                    </div> 
                                                    <!-- <div class="modal-footer" style="background:#f4f4f7; padding-top:10px">
                                                        <?php include('./Animations/loaderModal.php')?>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div> 
                                        <table class="table col-md-10" style="margin-top:20px">
                                                <thead>
                                                    <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">NRO. GARANTE</th>
                                                    <th scope="col">NOMBRE Y APELLIDO</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <th scope="row">1</th>
                                                    <td>EVA ANGELINA REARTES</td>
                                                    <td><div class="dropdown" >
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" >
                                                        <li class="active"><a href="#">Editar</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul></div></td>
                                                    </tr>
                                                </tbody>
                                        </table>
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

