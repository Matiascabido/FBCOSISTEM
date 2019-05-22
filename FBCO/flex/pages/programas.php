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
        <link rel="stylesheet" href="Style/style.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"  id="bootstrap-css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>  
        <title>Programas</title>
    </head>
    <body>
        <div class="container col-md-12">
            <div class="row">
                <div class="wrapper active">
                    <?php
                    include('global/path.php');
                    $enlace_actual = $programas;
                    include('../Components/Navbar.php');
                    ?>
                    <div class="content">
                    <?php
                    include('../Components/Navtop.php');
                    ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7"> <h1>Programas</h1>  </div>
                            <div class="col-md-5"> <a href="#"><h1>Nuevo Programa</h1></a></div>                       
                        </div>
                        <div class="row">
                            <div class="Badge col-md-12">
                               <div class="Badge__header" style="height: 50px; border-radius: 8px 8px 8px 8px;">
                                    <h2 style="color:#f4f4f7; text-aling:center; margin-top:0; padding-top:4px">Filtros</h2>
                                </div>
                                <div class="Badge__section-info">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Código</small>
                                                <input type="text" style="text-align: center;" class="form-control" id="solicitud" placeholder="Código">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <small>Nombre</small>
                                                <input type="datetime" style="text-align: center;" class="form-control" id="nombre" placeholder="Nombre">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-2">
                                                <small>Estado
                                                <div class="checkbox">
                                                    <small><input type="checkbox" name="estado" checked>Activos</small>
                                                </div>
                                            </small>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Fecha Desde</small>
                                                <input type="text" style="text-align: center;" class="form-control" name="" id="" placeholder="01/01/1810">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Fecha Hasta</small>
                                                <input type="text" style="text-align: center;" class="form-control" name="" id=""placeholder="31/12/2019">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-4">
                                                <small>Convenio</small>
                                                <input type="text" style="text-align: center;" class="form-control" name="" id=""placeholder="Convenio">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-12 col-md-9">
                                                </div>
                                                <div class="form-group col-sm-12 col-md-3">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="material-icons md-18">search</i>
                                                    </button>
                                                </div>
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
                                                <th scope="col">ID</th>
                                                <th scope="col">CÓDIGO</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">MONTO MAÁXIMO</th>
                                                <th scope="col">CUOTAS</th>
                                                <th scope="col">INTERÉS ANUAL</th>
                                                <th scope="col">INTERÉS PUNITORIO</th>
                                                <th scope="col">FECHA ALTA</th>
                                                <th scope="col">ACCIONES</th>
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
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
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
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
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
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                    <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">5</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">6</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div> <i class="material-icons md-18">queue_play_next</i></td>
                                                </tr>
                                                    <tr>
                                                <th scope="row">7</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">8</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">9</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
                                                        <li class="disabled"><a href="#">Eliminar</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                                    <tr>
                                                <th scope="row">10</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                        <li class="active"><a href="<? echo $programa ?>">Ver / Editar</a></li>
                                                        <li ><a href="#">Next</a></li>
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
        <script>$(document).ready(function() { $(".push_menu").click(function() 
        {$(".wrapper").removeClass("active");})
        ;});</script>
    </body>
</html>
