<?php
	//EN VEZ DE RECIBIR sso_estado  
	//TOMAR EL CAMPO estado
	include_once('../conn.php');
	include_once('../../../flex/pages/global/path.php');
	$credito = (!isset($_REQUEST["credito"]))?'':trim($_REQUEST["credito"]);
	$fechaDesde = (!isset($_REQUEST["fechaDesde"]))?'':trim($_REQUEST["fechaDesde"]);
	$fechaHasta = (!isset($_REQUEST["fechaHasta"]))?'':trim($_REQUEST["fechaHasta"]);
	$apellido = (!isset($_REQUEST["apellido"]))?'':trim($_REQUEST["apellido"]);
	$nombre = (!isset($_REQUEST["nombre"]))?'':trim($_REQUEST["nombre"]);
	$programa = (!isset($_REQUEST["programa"]))?0:trim($_REQUEST["programa"]);
	$estado = (!isset($_REQUEST["estado"]))?'0':trim($_REQUEST["estado"]);
	$atm = (!isset($_REQUEST["atm"]))?0:trim($_REQUEST["atm"]);
	$orderBy = (!isset($_REQUEST["orderBy"]))?'':trim($_REQUEST["orderBy"]);
	$elementos = (!isset($_REQUEST["elementos"]))?10:trim($_REQUEST["elementos"]);
	$id = (!isset($_REQUEST["id"]))?0:trim($_REQUEST["id"]);
	$dire = (!isset($_REQUEST["dire"]))?0:trim($_REQUEST["dire"]);
	//$accionPendiente = (!isset($_REQUEST["accionPendiente"]))?'':trim($_REQUEST["accionPendiente"]);
	//NÚMERO	NOMBRE Y APELLIDO	FECHA SOLICITUD	PROGRAMA	ATM	ETAPA	ESTADO
	$sql  = " select TOP ".$elementos." S.sol_id, S.sol_per_apellido, S.sol_per_nombre, S.sol_fecha_sol, P.pro_id as id_programa, P.pro_nombre,	isnull(S.id_atm, 0) as id_atm , A.atm_nombre,	A.atm_apellido, ";
	$sql .= " ss.sso_estado, do.dom_texto as estado, isnull(C.cre_id, 0) as id_credito";
	$sql .= " from FBC_SOLICITUD S";
	$sql .= " inner join FBC_PROGRAMA P on P.pro_id = S.id_programa_solicitado";
	$sql .= " left outer join FBC_CREDITO C on C.id_solicitud = S.sol_id";
	$sql .= " left outer join FBC_ATM A on A.atm_id = S.id_atm";
	$sql .= " inner join FBC_SEGUIMIENTO_SOLICITUD ss on ss.id_solicitud = S.sol_id and ss.sso_id in ";
	$sql .= "																			(select max(sso_id) from FBC_SEGUIMIENTO_SOLICITUD where id_solicitud = S.sol_id)";
	$sql .= " inner join FBC_DOMINIO do on do.dom_clave = ss.sso_estado";
	
	if ($credito <> ''){
		$sql .= " where S.sol_id = ".$credito;
	}else	if ($elementos <> 0){
		if ($id > 0)
			if ($dire == 0)
			{
				$sql .=" where S.sol_id < ".$id;
			}
			else
			{
				$sql .=" where S.sol_id > ".$id;
			}
		else
			$sql .= " where 1=1";
	}	else
		$sql .= " where 1=1";
  //TRABAJAR BIEN LAS FECHAS
	if ($apellido <> ''){
	  $apellido = Trim($apellido);
	  if (strpos($apellido,' ') > 0)
	  {
			$aPrimero = substr($apellido, 0, strpos($apellido, ' '));
			$aSegundo = substr($apellido, strpos($apellido, ' ')+1, strlen($apellido));
			$sql .= " and (S.sol_per_apellido like '%".$aPrimero."%".$aSegundo."%' or S.sol_per_apellido like'%".$aSegundo."%".$aPrimero."%')";
	  }
	  else
			$sql .= " and S.sol_per_apellido like '%".$apellido."%'";
	}
	if ($nombre <> ''){
	  $nombre = Trim($nombre);
	  if (strpos($nombre,' ') > 0)
	  {
		  
		  $nPrimero = substr($nombre, 0, strpos($nombre, ' ')); 
		  $nSegundo = substr($nombre, strpos($nombre, ' ')+1, strlen($nombre));
			$sql .= " and (S.sol_per_nombre like '%".$nPrimero."%".$nSegundo."%' or S.sol_per_nombre like'%".$nSegundo."%".$nPrimero."%')";
		}
		else
			$sql .= " and S.sol_per_nombre like '%".$nombre."%'";
	}
	if ($programa <> 0)
		$sql .= " and S.id_programa_solicitado = ".$programa;
	if ($atm <> 0)
		$sql .= " and S.id_atm = ".$atm;
	if ($estado <> '0')
		$sql .= " and ss.sso_estado = '".$estado."'";
	if (Trim($fechaDesde) <> ''){
//		$sql = " and S."
	}
	if (Trim($fechaHasta) <> ''){
		
	}
	if ($orderBy <> '')
		$sql .= " order by ".$orderBy;
	if ($dire == 0)
	{
		$sql .= " order by S.sol_id desc";
	}
	else
	{
		$sql .= " order by S.sol_id asc";
		$sql = "select * from ( ".$sql.") as Z order by sol_id desc";
	}
	
  try
	{
		$lista = array();
		$rs = sqlsrv_query($conn, $sql);
		if ($rs){
			while ($row = sqlsrv_fetch_array($rs)){
					if (strcmp($row['sol_per_apellido'], $row['sol_per_nombre']) == 0){
						$apellido = "";
					}
					else
						$apellido = utf8_encode($row['sol_per_apellido']);
					if (strcmp($row['atm_apellido'], $row['atm_nombre']) == 0){
						$atmApellido = "";
					}
					else
						$atmApellido = utf8_encode($row['atm_apellido']);
					$drop = "";
					$drop = '<div class="dropdown">
	                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	                  <span class="caret"></span></button>
	                  <ul class="dropdown-menu"> 
	                  <li class="active">';
	        $drop .= '<a href="'.$seguimiento.'">Ver / Editar</a></li>';
	        $drop .= '<li ><a href="#">Next</a></li><li class="disabled"><a href="#">Eliminar</a></li> </ul> </div>';
						array_push($lista, array('id_solicitud' =>  $row['sol_id'], 'sol_per_apellido' => $apellido, 'sol_per_nombre' => utf8_encode($row['sol_per_nombre']), 
							'sol_fecha_sol' =>  date_format($row['sol_fecha_sol'],'d/m/Y'), 'id_programa' => $row['id_programa'], 'pro_nombre' => utf8_encode($row['pro_nombre']), 'id_atm' => $row['id_atm'],
							'atm_nombre' => utf8_encode($row['atm_nombre']), 'atm_apellido' => $atmApellido, 'sso_estado' => utf8_encode($row['sso_estado']),
							'estado' => $row['estado'], 
							'id_credito' => $row['id_credito'], 'drop' => $drop));
			}  
			//var_dump($lista);
			$retorno = json_encode($lista);
	  	$resul = '{ "success" : true, "codigoError": 0, "mensaje" :"", "mensajeExtra":"", "resultado":'.$retorno.'}';
	  }
	  else
	 		$resul = '{ "success" : false, "codigoError": 1, "mensaje" :"Error de conexion a la base de datos", "mensajeExtra":"", "resultado":[]}'; 	
	}
	catch (Exception $e) 
  {
  	$resul = '{ "success" : false, "codigoError": 1, "mensaje" :"Error de conexion a la base de datos", "mensajeExtra":"", "resultado":[]}';
  }
  echo $resul;
?>