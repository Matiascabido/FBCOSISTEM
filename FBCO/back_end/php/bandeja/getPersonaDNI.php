<?php
  include_once('../conn.php');

  $dni = (!isset($_REQUEST["dni"]))?'':trim($_REQUEST["dni"]);
  if ($dni!='')
  {
    $sql  = " select do.dom_texto as tipo_documento ,p.per_id, p.per_nombre ,p.per_apellido, p.per_tipo_doc, p.per_num_doc, 
              p.per_sexo, do2.dom_texto as sexo, pa.pai_descripcion, p.per_fec_nac, l.loc_descripcion, d.dto_descripcion, pr.prp_descripcion,
              p.per_barrio, p.per_calle , p.per_num_calle , p.per_lote, p.per_manzana , p.per_piso , p.per_dpto, p.per_cod_postal,
              p.per_tel_fijo, p.per_tel_cel, p.per_tel_alternativo, p.per_mail, p.per_estado_civil, do3.dom_texto as estado_civil, 
              p.per_trabaja, do4.dom_texto as trabaja, per_formacion, do5.dom_texto as formacion, p.id_profesion, pro.prf_descripcion as profesion
              from FBC_PERSONA p
              inner join FBC_DOMINIO do on do.dom_clave = p.per_tipo_doc
              inner join FBC_DOMINIO do2 on do2.dom_clave = p.per_sexo
              left outer join FBC_PAIS pa on pa.pai_id = p.id_nacionalidad
              inner join FBC_LOCALIDAD l on l.loc_id = p.id_localidad
              inner join FBC_DEPARTAMENTO d on d.dto_id = l.id_departamento
              inner join FBC_PROVINCIA pr on pr.prp_id = d.id_provincia
              inner join FBC_DOMINIO do3 on do3.dom_clave = p.per_estado_civil
              inner join FBC_DOMINIO do4 on do4.dom_clave = p.per_trabaja
              inner join FBC_DOMINIO do5 on do5.dom_clave = p.per_formacion
              left outer join FBC_PROFESION pro on pro.prf_id = p.id_profesion
              where p.per_num_doc ='".$dni."'";
      try
      {
        $lista = array();
        $rs = sqlsrv_query($conn, $sql);
        if ($rs){

          while ($row = sqlsrv_fetch_array($rs)){
              if (strcmp($row['per_apellido'], $row['per_nombre']) == 0){
                $apellido = "";
              }
              else
                $apellido = utf8_encode($row['per_apellido']);

              if ($row['per_barrio'] == 'SIN_BARRIO_MIGRACION'){
                $barrio = "";
              }
              else
                $barrio = utf8_encode($row['per_barrio']);


                array_push($lista, array('per_apellido' => $apellido, 'per_nombre' => utf8_encode($row['per_nombre']), 
                  'sol_fecha_sol' =>  date_format($row['sol_fecha_sol'],'d/m/Y'), 'id_programa' => $row['id_programa'], 'pro_descripcion' => utf8_encode($row['pro_descripcion']), 'id_atm' => $row['id_atm'],
                  'atm_nombre' => utf8_encode($row['atm_nombre']), 'atm_apellido' => $atmApellido, 'sso_estado' => utf8_encode($row['sso_estado']), 
                  'id_credito' => $row['id_credito']));
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



    }
    else
    {
      $resul = '{ "success" : false, "codigoError": 2, "mensaje" :"Debe especificar un número de documento", "mensajeExtra":"", "resultado":{}}';  
    }
  echo $resul;
?>