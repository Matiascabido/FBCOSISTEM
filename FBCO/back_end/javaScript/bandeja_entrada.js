//VARIABLES GLOBALES
var a = 0;
var CARGAR_Combo = false;
var CARGAR_ComboModal = false;

//FUNCIONES A REALIZAR CUANDO SE CARGA EL DOCUMENTO
$(document).ready(function() {
  traerTabla(0, 0);
});

// RUTINA PARA AGREGAR OPCIONES A UN <select> Y SELECCIONAR SI TIENE ALGUN DATO DE LA BASE
function addOptions(domElement, array, selected) {
  var select = document.getElementsByName(domElement)[0];

  for (value in array) {
    var option = document.createElement("option");

    if (array[value] == selected) {
      option.text = array[value];
      option.setAttribute("selected", "true");
      option.setAttribute("value", parseInt(value) + parseInt(1));
      select.add(option);
    } else {
      option.setAttribute("value", parseInt(value) + parseInt(1));
      option.text = array[value];
      select.add(option);
    }
  }
}
// CARGAR ARRAY, DONDE UBIAR EL COMBO Y CUAL ES EL OBJETO SELECCIONADO
function cargar_combo(datos, donde, selected) {
  var array = [];
  var select = "";
  if (datos != null) {
    array = datos;
    array.sort();
    if (selected != null || selected != 0) {
      addOptions(donde, array, selected);
    } else {
      addOptions(donde, array, select);
    }
  }
}

//CARGAR LA TABLA PRINCIPAL DE BANDEJA DE ENTRADA
function traerTabla(id, dire) {
  //DISEÑO
  $("#loadr").show();
  $("#index")
    .removeAttr("style")
    .hide();
  //FIN DISEÑO

  //AJAX
  $.ajax({
    type: "POST",
    url: "../../back_end/php/bandeja/getBandejaTrabajo.php",
    data: {
      id: id,
      dire: dire,
      credito: $("#credito").val(),
      fechaDesde: $("#fechaDesde").val(),
      fechaHasta: $("#fechaHasta").val(),
      apellido: $("#apellido").val(),
      nombre: $("#nombre").val(),
      atm: $("#atm").val()
    },
    dataType: "json",
    success: function(data) {
      //SE DECLARA VARIABLES DE COMBO A LLENAR
      var datosCombo = [];

      //DISEÑO
      $("#loadr")
        .removeAttr("style")
        .hide();
      $("#index").show();
      //FIN DISEÑO

      //EN CASO DE EXITO
      if (data.success == true) {
        $("#indexbody").html("");
        if (data.resultado.length < 10) {
          //NO DIBUJAR PAGGINADO EN CASO DE TENER MENOS DE 10 REGISTROS
          $("#pagginado").html("");
        } else {
          //SE CREA EL PAGGINADO
          crearPaginadoNext(
            data.resultado[data.resultado.length - 1].id_solicitud,
            data.resultado[0].id_solicitud
          );
          // SE ITERAN LOS TR PARA LLENAR LA TABAL PRINCIPAL
          for (i = 0; i < data.resultado.length; i++) {
            //SE AGREGAN DATOS AL COMBO (SE REALIZARA POR FUERA DE ESTA FUNCION)
            datosCombo.push(
              data.resultado[i].sol_per_nombre +
                " " +
                data.resultado[i].sol_per_apellido
            );
            var tr =
              `<tr>
            <td>` +
              data.resultado[i].id_solicitud +
              `</td>
            <td>` +
              data.resultado[i].sol_per_nombre +
              "    " +
              data.resultado[i].sol_per_apellido +
              `</td>
            <td>` +
              data.resultado[i].sol_fecha_sol +
              `</td>
            <td>` +
              data.resultado[i].pro_nombre +
              `</td>
            <td>` +
              data.resultado[i].atm_nombre +
              "   " +
              data.resultado[i].atm_apellido +
              `</td>
            <td>` +
              data.resultado[i].estado +
              `</td>
            <td>` +
              data.resultado[i].drop +
              `</td> 
            <td>
            CONTINUARA </td> 
          </tr>`;
            //SE AGREGAN DATOS AL BODY DE LA TABLA
            $("#indexbody").append(tr);
          }
          //CONTROL PARA NO CARGAR MUCHAS VECES EL COMBO EN CASO DE REPETIDOS LLAMADOS (NO LLEVA ENCASO DE CARGAR COMBO EXTERNAMENTE)
          if (CARGAR_Combo == false) {
            cargar_combo(datosCombo, "atm");
            CARGAR_Combo = true;
          }
        }
      }
    }
  });
}

//CARGAR LA TABALA DEL EMPRENDEDOR SI EXISTE PREVIAMENTE
function traerTablaModal(id, dire) {
  $("#modal-loader").show();
  $("#modlaBandeja")
    .removeAttr("style")
    .hide();
  $("#modal-buttons")
    .removeAttr("style")
    .hide();
  $.ajax({
    type: "POST",
    url: "../../back_end/php/bandeja/getPersonaDNI.php",
    data: {
      id: id,
      dire: dire,
      dni: $("#consultor").val()
    },
    dataType: "json",
    success: function(data) {
      console.log(data);
      //LLENAR COMBO
      //  var datosCombo = [];
      //DISEÑO
      $("#modal-loader")
        .removeAttr("style")
        .hide();
      $("#modlaBandeja").show();
      $("#modal-buttons").show();
      //FIN DISEÑO

      //CARGAR TABLA
      if (data.success == true) {
        if (data.resultado != "") {
          for (i = 0; i < data.resultado.length; i++) {
            var tr =
              `<tr>
            <td>` +
              data.resultado[i].id_credito +
              `</td>
            <td>` +
              data.resultado[i].sol_fecha_sol +
              `</td>
            <td>` +
              data.resultado[i].sso_estado +
              `</td>
            <td>
            CONTINUARA </td> 
          </tr>`;
            $("#modalTable").append(tr);
          }
          //FIN CARGA DE TABLA
        } else
          alert(
            "EL NÚMERO DE DOCUMENTO NO CORRESPONDE A UN EMPRENDEDOR REGISTRADO"
          );
      }
      // EN CASO DE FALLO SE MUESTARA EL ERROR
      else {
        alert(data.mensaje);
        CierraModal();
      }
    }
  });
}
//FUNCION PARA CERRAR EL MODAL EN CASO DE NO COLOCAR UN NUMERO DE DOCUMENTO
function CierraModal() {
  $("#exampleModal").modal("hide"); //ocultamos el modal
  $("#exampleModal").removeClass("modal-open"); //eliminamos la clase del div para poder hacer scroll
  $(".modal-backdrop").remove(); //eliminamos el backdrop del modal
}

//CARGAR PAGGINADO
function crearPaginadoNext(id1, id2) {
  if (a == 0) {
    $("#pagginado").html(
      `
        <nav aria-small ="Page navigation">
           <ul class="pagination">
               <li class="page-item disabled"><botton class="btn btn-info" >Previous </botton></li>
               <li class="page-item"><botton class="btn btn-primary" onClick="next(` +
        id1 +
        `)" >Next </botton></li>    
           </ul>
       </nav>`
    );
  } else {
    $("#pagginado").html(
      `
     <nav aria-small ="Page navigation">
       <ul class="pagination">
        <li class="page-item disabled"><botton class="btn btn-info"  style="width:100px;color:black"  onClick="next(` +
        id2 +
        `)">Previous</botton> </li>
        <li class="page-item"><botton class="btn btn-primary"  style="width:50px;color:white" onClick="next(` +
        id1 +
        `)" >Next</botton> </li>
       </ul>
   </nav>`
    );
  }
}

//LIMPIAR CAMPOS DE FILTROS
function limpiar() {
  $("#credito").val("");
  $("#fechaDesde").val("");
  $("#fechaHasta").val("");
  $("#apellido").val("");
  $("#nombre").val("");
}

//FUNCION DEL BOTON NEXT DEL PAGGINADO
function next(id1) {
  $("#loadr").show();
  $("#index")
    .removeAttr("style")
    .hide();
  traerTabla(id1, 0);
  a++;
}

//FUNCION DEL BOTON PREVIO DEL PAGGINADO
function prev(id2) {
  $("#loadr").show();
  $("#index")
    .removeAttr("style")
    .hide();
  traerTabla(id2, 1);
  a--;
}
