<?php 

  //$MAIN_URL  = 'http://localhost/pruebabomberos';
  //$MAIN_URL  = 'http://bomberoscordoba.org.ar/usuarios/mesa';
if (strlen(session_id()) < 1) session_start();
   $host = "fbcodev.database.windows.net";
   $user   = "adminDev";
   $pass    = "trimixFBCO2017";
   $db    = "GestionCreditosFBCO";
  // $host = "192.168.1.20";
  // $user   = "sa";
  // $pass    = "fundacion";
  // $db   = "NuevoFBCO";
$connectionInfo = array(
    "Database" => $db,
    "Uid" => $user,
    "PWD" => $pass,
    "TraceOn" => true, // this line
    "TraceFile" => "sqlsrvtrace.log", // and this line
    "CharacterSet" => "UTF-8",
);
$conn = sqlsrv_connect($host, $connectionInfo);
  // function ultimoId($c, $tabla)
  // {
  //   $res = 0;
  //   $r = sqlsrv_query($c, "SELECT IDENT_CURRENT('".$tabla."')");
  //   $row = sqlsrv_fetch_array($r);
  //   return $row[0];
  // }
  /*
  function formatearFecha($fecha)
  {
    $f = strtotime($fecha);
    return date("Y", $f).'-'.date("m", $f).'-'.date("d", $f);
  }
  function procesarFecha($fecha)
  {
    $auxD = substr($fecha,-10,2);
    $auxM = substr($fecha,-7,2);
    $auxA = substr($fecha,-4,4);
    return $auxA.'-'.$auxM.'-'.$auxD;
  }
  function mayorId($c, $tabla, $campo)
  {
      $resu = mysqli_query($c, "SELECT MAX(".$campo.")+1 FROM ".$tabla);
      if ($resu)
      {
        $rowcount=mysqli_num_rows($resu);
        if ($rowcount != 0)
        {
          $row = mysqli_fetch_array($resu,MYSQLI_BOTH);
          if ($row[0] == null)
            return 1;
          else
            return $row[0];
        }
          return 1;
      }
      return 1;
  }
  */
?>

