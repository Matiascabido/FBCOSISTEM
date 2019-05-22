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
                                <li class="active"><a href="<?php echo $datosFam?>">Datos Familiares</a></li>
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
                                    <h2 style="color:antiquewhite; text-align:center; margin-top:0; padding-top:4px">Datos Familiares</h2>
                                </div>
                                <!-- BOTON PARA ABRIR UN NUEVO POPUP -->
                                <div class="Badge__section-info" style="margin-top:20px">
                                   <div class="row">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Familiar</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h4 class="modal-title w-100 font-weight-bold">Nuevo Familiar</h4>
                                                        <select id="orangeForm-name" class="center-block form-control validate" style="width: 200px; height:30px; text-align: center; margin-top:10px"><option value="">Seleccionar</option></select>                                               
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                                                                    <input type="text" id="orangeForm-name" class="form-control validate" style="width: 250px; height:30px; text-align: center;">
                                                                    </div>
                                                                    <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name" >Apellido</label>
                                                                    <input type="text" id="orangeForm-name" class="form-control validate" style="width: 250px; height:30px; text-align: center;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Tipo de Documento</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 70px; height:30px; text-align: center;"><option value="">DNI</option></select>                                               
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Numero de Documento</label>
                                                                    <input type="text" id="orangeForm-name" class="form-control validate" style="width: 120px; height:30px; text-align: center;">
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-envelope prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-email">Fecha de Nacimiento</label>
                                                                    <input type="email" id="orangeForm-email" class="form-control validate" style="width: 100px; height:30px; text-align: center;">
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">CUIL/CUIT</label>
                                                                    <input type="email" id="orangeForm-email" class="form-control validate" style="width: 150px; height:30px; text-align: center;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Sexo</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Nacionalidad</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>   
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Telefono Celular</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>   
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Estado Civil</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Loc.Emprendimiento</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Trabaja ?</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                                <div class="md-form col-md-4">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Formacion</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="md-form col-md-6">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Profesion</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="md-form col-md-10">
                                                                    <i class="fas fa-user prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Vive en el mismo domicilio que el emprendedor?</label>
                                                                    <select id="orangeForm-name" class="form-control validate" style="width: 400px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                                </div>
                                                            </div>
                                                    </div>
                                                <!-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div> -->
                                                <div class="modal-footer">
                                                <?php include('../Animations/loaderModalTabs.php')?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                   <!-- TABLA DE REGISTROS -->
                                   <div class="row col-md-12" style="margin-top:20px">
                                   <table class="table" id="familiar" name="familiar">
                                            <thead class="black white-text">
                                                <tr>
                                                <th scope="col">NOMBRE Y APELLIDO</th>
                                                <th scope="col">DNI</th>
                                                <th scope="col">FECHA NACIMIENTO</th>
                                                <th scope="col">EMAIL</th>
                                                <th scope="col">DIRECCION</th>
                                                <th scope="col">TELEFONO</th>
                                                <th scope="col">ACCIONES</th>
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
                                                <td><div class="dropdown" >
                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" >
                                                    <li class="active"><a href="#">Editar</a></li>
                                                    <li class="disabled"><a href="#">Eliminar</a></li>
                                                    </ul>
                                                </div></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>$(document).ready(function() { $(".push_menu").click(function() {$(".wrapper").removeClass("active");});});</script>
    </body>
</html>
