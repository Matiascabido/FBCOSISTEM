<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="../../Style/style.css" />
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
                                <li><a href="<?php echo $inv_deu_inv_for?>">Inversiones - Deudas - Inversiones a Realizar - Formas de Financiar</a></li>
                                <li class="active"><a href="<?php echo $resultadosEco?>">Resultados Económicos</a></li>
                            </ul>
                            <div class="Badge" style="margin-top:-120px;">
                                <div class="Badge__section-info" >
                                    <div class="row col-md-12 "style="margin-top:30px;">   
                                        <div class="col-md-12" style="background-color:#CACFD2; margin-bottom:10px;">
                                            <h3 style="color:black; text-align: center; margin-top:0; padding-top:10px;">Resultados Económicos</h3>
                                        </div>
                                        <form class="col-md-10 col-md-offset-3" style="padding-top: 30px;"> 
                                            <div class="form-row" style="margin-right: 30px;">
                                                <div class="form-group col-sm-12 col-md-4">
                                                    <small>Resultados Económicos Actuales y Esperados del Emprendimiento</small>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-4">
                                                <select class="form-control" style="width: 400px; text-align: center;"><option value="">Mensual</option></select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row col-md-12 " style="margin-top:30px;">  
                                        <button class="btn btn-primary">Nuevo</button>
                                        <table class="table" style="text-align:right;">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">ACCION</th>
                                                    <th scope="col">A. Ingresos por ventas mensuales</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ACTUAL</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ESPERADO</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr scope="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td>PRECIO</td>
                                                        <td>CANTIDAD</td>
                                                        <td>TOTAL</td>
                                                        <td>PRECIO</td>
                                                        <td>CANTIDAD</td>
                                                        <td>TOTAL</td>
                                                        <td></td>
                                                        </tr>
                                                    <tr>
                                                    <tr scope="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td>$4,000.00</td>
                                                        <td>1</td>
                                                        <td>$4,000.00</td>
                                                        <td>$0.00</td>
                                                        <td>0</td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                        </tr>
                                                    <tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    <div class="row col-md-12 " style="margin-top:30px;">  
                                        <button class="btn btn-primary">Nuevo</button>
                                        <table class="table" style="text-align:right;">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">ACCION</th>
                                                    <th scope="col">B. Costos Variables</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ACTUAL</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ESPERADO</th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr scope="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td>PRECIO</td>
                                                        <td>CANTIDAD</td>
                                                        <td>TOTAL</td>
                                                        <td>PRECIO</td>
                                                        <td>CANTIDAD</td>
                                                        <td>TOTAL</td>
                                                        <td></td>
                                                        </tr>
                                                    <tr>
                                                    <tr scope="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        </tr>
                                                    <tr>
                                                    <tr scope="row">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$4,000.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        </tr>
                                                    <tr>
                                                </tbody>
                                        </table>
                                        <table class="table" style="margin-top:30px; text-align:left; ">
                                                <thead class="black white-text">
                                                    <tr>
                                                    <th scope="col">D. Gastos de administración y comercialización</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ACTUAL</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">ESPERADO</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr scope="row">
                                                        <td>Sueldos y Cargas Sociales</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Servicios</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Impuestos</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Alquiler</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Mantenimiento de Equipos</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Movilidad</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Cuotas Crédito</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Sueldos o Retiro del Titular</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Otros Gastos</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Gastos de Núcleo Familiar</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Costos Fijos</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Costos de Venta a Futuro</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Costos Fijos a Futuro</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" style="width: 50px; text-align: center;"/></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>Sub Total Gastos (D)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr scope="row">
                                                        <td>E. Utilidad Neta Esperada (Utilidad Bruta - Gastos) (C-D)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>$0.00</td>
                                                        <td></td>
                                                    </tr>    
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="Badge__section-info" style="margin-top:50px">
                                        <button class="btn btn-primary">Guardar Cambios</button>
                                    </div>

                                <div class="Badge__footer">
                                   
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
