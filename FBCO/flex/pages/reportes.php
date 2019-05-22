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
        <link rel="stylesheet" type="text/css" href="./Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/> 
        <title>Reportes</title>
    </head>
    <body>
        <div class="container col-md-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('global/path.php');
                    $enlace_actual = $reportes;
                    include('../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../Components/Navtop.php');
                    ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7"> <h1>Reportes</h1> </div>
                        </div>
                        <div class="row">
                            <div class="Badge col-md-12">
                            <div class="Badge__header" style="height: 50px; border-radius: 8px 8px 8px 8px;">
                                    <h2 style="color:#f4f4f7; text-aling:center; margin-top:0; padding-top:4px">Filtros</h2>
                                </div>
                                <div class="Badge__section-info">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Credito</small>
                                                <input type="text" class="form-control" id="solicitud" placeholder="Credito">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Fecha</small>
                                                <input type="datetime"  class="form-control" id="fecha" placeholder="Fecha">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Apellido</small>
                                                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Nombre</small>
                                                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Etapa</small>
                                                <select class="form-control">
                                                    <option value="">Selection</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Estado</small>
                                                <select class="form-control">
                                                    <option value="">Selection</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>ATM</small>
                                                <select class="form-control">
                                                    <option value="">Selection</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <small>Acciones Pendientes</small>
                                                <select class="form-control"><option value="">Selection</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-9">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <button type="button" class="btn btn-outline-dark">
                                                    <i class="material-icons md-18">search</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="Badge__pagi">
                                    <nav aria-small="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="Badge__footer">
                                    <table class="table">
                                            <thead class="black white-text">
                                                <tr>
                                                <th scope="col">NÚMERO</th>
                                                <th scope="col">NOMBRE Y APELLIDO</th>
                                                <th scope="col">FECHA SOLICITUD</th>
                                                <th scope="col">PROGRAMA</th>
                                                <th scope="col">ATM</th>
                                                <th scope="col">ETAPA</th>
                                                <th scope="col">ESTADO</th>
                                                <th scope="col">ACCIONES</th>
                                                <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><i class="material-icons md-18">local_hospital</i></td>
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
                                                <td><i class="material-icons md-18">local_hospital</i></td>
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
                                                <td><i class="material-icons md-18">local_hospital</i> <i class="material-icons md-18">queue_play_next</i></td>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script>$(document).ready(function() { $(".push_menu").click(function() 
        {$(".wrapper").removeClass("active");})
        ;});</script>
    </body>
</html>
