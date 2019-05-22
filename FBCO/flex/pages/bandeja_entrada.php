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
        <link rel="stylesheet"  type="text/css" href="Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/> 
        <title>Bandeja de Entrada</title>
    </head>
    <body>
        <div class="container col-sm-12 col-md-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('./global/path.php');
                    $enlace_actual = $index;
                    include('../Components/Navbar.php');
                    ?>
                    <div class="content">
                        <?php
                        include('../Components/Navtop.php');
                        ?>
                        <div class="col-md-12">
                            <!-- TITULOS SUPERIORES -->
                            <div class="row">
                                <div class="col-md-7">
                                        <h1>Bandeja de Entrada</h1> 
                                </div>
                                <div class="col-md-2"style="margin-top:24px">
                                    <input style="width:210px" type="text" class="form-control" id="consultor" name="consultor" placeholder="Ingresar DNI o Apellido">
                                </div>
                                <div class="col-md-3" style="margin-top:24px">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onClick="traerTablaModal(0,0)">
                                        Consultar / Registrar Emprendedor
                                    </button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                        <div class="modal-dialog" role="document">
                                            <!-- CONTENIDO DEL MODAL -->
                                            <div class="modal-content">
                                                <!-- CABEZERA -->
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Emprendedor</h4>
                                                </div>
                                                <!-- MODAL -->
                                                    <div class="modal-body" style="paddign-top:20px">
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
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="numeroDocumento" name="numeroDocumento" style="width:120px; height:30px; text-align: center;">
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <!-- FECHA DE NACIMIENTO Y SEXO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Fecha de Nacimiento</label>
                                                                <input type="email"  class="form-control validate" id="fechaNacimiento" name="fechaNacimiento" style="width: 100px; height:30px; text-align: center;">
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right">Sexo</label>
                                                                <select class="form-control validate" id="sexo" name="sexo" style="width: 200px; height:30px; text-align: center;"><option value=0>Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- PAIS EMPRENDIMIENTO Y PROVINCIA EMPRENDIMIENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Pais Emprendimiento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="paisEmprendimiento" name="paisEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Pcia. Emprendimiento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="pciaEmprendimiento" name="pciaEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <!-- DEPARTAMENTO EMPRENDIMIENTO Y LOCALIDAD EMPRENDIMIENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Dto.Emprendimiento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="dtoEmprendimiento" name="dtoEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                            <div class="md-form col-md-4">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Loc.Emprendimiento</label>
                                                                <select id="orangeForm-name" class="form-control validate" id="locEmprendimiento" name="locEmprendimiento" style="width: 200px; height:30px; text-align: center;"><option value="">Seleccionar</option></select>                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- NOMBRE EMPRENDIMIENTO -->
                                                            <div class="md-form col-md-6">
                                                                <i class="fas fa-user prefix grey-text"></i>
                                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre Emprendimiento</label>
                                                                <input type="text" id="orangeForm-name" class="form-control validate" id="nombreEmprendimiento" name="nombreEmprendimiento"  style="width: 500px; height:30px; text-align: center;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- TABLA DEL MODAL -->
                                                            <div class="md-form col-md-12" style="margin-top:10px">
                                                                <table class="table" id="modlaBandeja" names="modalBandeja">
                                                                    <thead class="black white-text ">
                                                                            <tr>
                                                                            <th scope="col">Credito</th>
                                                                            <th scope="col">Fecha</th>
                                                                            <th scope="col">Estado</th>
                                                                            <th scope="col">Relacion</th>
                                                                            </tr>
                                                                    </thead>
                                                                    <tbody id="modalTable">
                                                                            <!-- SE LLENA DESDE JS -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- BOTONES DE CERRAR Y GUARDAR -->
                                                     <div class="modal-footer" id="modal-buttons">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Nuevo Emprendedor</button>
                                                    </div> 
                                                    <div class="modal-footer" id="modal-loader" style="background:#f4f4f7; padding-top:10px">
                                                        <?php include('./Animations/loaderModal.php')?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- BADGE -->
                            <div class="row">
                                <div class="Badge col-md-12" style="">
                                    <div class="Badge__header" style="height: 50px; border-radius: 8px 8px 8px 8px;">
                                        <h2 style="color:#f4f4f7; text-aling:center; margin-top:0; padding-top:4px">Filtros</h2>
                                    </div>
                                    <!-- FORMULARIO DE BUSQUEDA -->
                                    <div class="Badge__section-info ">
                                        <form class="col-sm-12 col-md-11 col-md-offset-">
                                            <!-- FORM PARTE 1 -->
                                            <div class="form-row">
                                                <!-- CREDITO -->
                                                <div class="form-group col-sm-12 col-md-2">
                                                    <small >Credito</small >
                                                    <input type="text" class="form-control" id="credito" name="credito" placeholder="Credito">
                                                </div>
                                                <!-- FECHA DESDE-->
                                                <div class="form-group col-sm-12 col-md-2">
                                                    <small >Fecha Desde</small >
                                                    <input type="datetime" style="width: 150px; text-align: center;" class="form-control" id="fechaDesde" name="fechaDesde" placeholder="Fecha Desde">
                                                </div>
                                                 <!-- FECHA HASTA-->
                                                <div class="form-group col-sm-12 col-md-2">
                                                    <small >Fecha Hasta</small >
                                                    <input type="datetime" style="width: 150px; text-align: center;" class="form-control" id="fechaHasta" name="fechaHasta" placeholder="Fecha Desde">
                                                </div>
                                                <!-- APELLIDO -->
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small >Apellido</small >
                                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                                                </div>
                                                <!-- NOMBRE -->
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <small >Nombre</small >
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <!-- FORM PARTE 2 -->
                                            <div class="form-row"> 
                                                <!-- PROGRAMA -->
                                                <div class="form-group col-sm-12 col-md-12">
                                                    <small >Programa</small >
                                                    <select class="form-control" id="etapa" name="etapa" style="width: 500px; text-align: center;">
                                                    <option>Seleccione un Programa...</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <!-- ESTADO, ATM Y ACCIONES PENDIENTES -->
                                            <div class="form-row">
                                                    <div class="form-group col-sm-12 col-md-3">
                                                        <small >Estado</small >
                                                        <select class="form-control" id="estado" name="estado">
                                                        <option>Seleccione un Estado...</option></select>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-md-3">
                                                        <small >ATM</small >
                                                        <select class="form-control" id="atm" name="atm">
                                                        <option value=0>Seleccione un Atm...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-md-3">
                                                        <small >Acciones Pendientes</small >
                                                        <select class="form-control" id="accionPendiente" name="accionPendiente">
                                                        <option >Seleccione una Accion...</option>
                                                        </select>
                                                    </div>
                                            </div>
                                                <!-- BOTON BUSCAR Y BORRAR FILTROS -->
                                            <div class="form-row">
                                                <div class="form-group col-sm-12 col-md-9">
                                                    <button type="button" class="btn btn-primary" onClick="limpiar()">
                                                        <i class="material-icons md-18">restore_from_trash</i>
                                                    </button>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <button type="button" class="btn btn-primary" 
                                                    onClick="traerTabla(0,0)">
                                                        <i class="material-icons md-18">search</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- PAGGINADO -->
                                    <div class="Badge__pagi" id="pagginado">
                                        
                                    </div>
                                    <!-- TABLA DE REGISTROS -->
                                    <div class="Badge__footer">
                                         <table class="table" id="index" names="index">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">NÚMERO</th>
                                                    <th scope="col">NOMBRE Y APELLIDO</th>
                                                    <th scope="col">FECHA SOLICITUD</th>
                                                    <th scope="col">PROGRAMA</th>
                                                    <th scope="col">ATM</th>
                                                    <th scope="col">ESTADO</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="indexbody">
                                                </tbody>
                                        </table>
                                         <div id="loadr" style="margin-top:300px;">
                                             <?php include('../pages/Animations/loader.php')?>
                                        </div> 
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
        <script src="../../back_end/javaScript/bandeja_entrada.js"></script>
        <script>$(document).ready(function() { $(".push_menu").click(function() 
        {$(".wrapper").removeClass("active");})
        ;});</script>
    </body>
</html>
