<?php

require_once ("config/configuracion.php");

/********************************************template de pagina********************************************************/

require_once ("config/db.php");
require_once ("classes/Login.php");
$login = new Login();
require_once ("includes/header.php");
//require_once ("config/ajax_session.php");

/*************************entrega de materiales****************************/

if ($login->isWhUserLoggedIn() == true && $page=="entregas_form")
{
    include("views/wh_entregas/entregas_form.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_view")
{
    include("views/wh_entregas/entregas_view.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_view_print")
{
    include("views/wh_entregas/entregas_view_print.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_view_print2")
{
    include("views/wh_entregas/entregas_view_print2.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_revision")
{
    include("views/wh_entregas/entregas_revision.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_historico")
{
    include("views/wh_entregas/entregas_historico.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_historico_detalles")
{
    include("views/wh_entregas/entregas_historico_detalles.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="entregas_historico_editar")
{
    include("views/wh_entregas/entregas_historico_editar.php");
}

/*************************tool crib****************************/

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_main")
{
    include("views/tool_crib/tool_crib_main.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_lista")
{
    include("views/tool_crib/tool_lista.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="proveedores")
{
    include("views/tool_crib/proveedores.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_historico")
{
    include("views/tool_crib/tool_crib_historico.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="categorias")
{
    include("views/tool_crib/categorias.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_inventario")
{
    include("views/tool_crib/tool_crib_inventario.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="marcas")
{
    include("views/tool_crib/marcas.php");
}

/*
elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_mov")
{
    include("views/tool_crib/tool_crib_mov.php");
}
*/

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_mov")
{
    include("views/tool_crib/tool_crib_mov_2.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="tool_crib_add_item")
{
    include("views/tool_crib/tool_crib_add_item.php");
}


elseif ($login->isWhUserLoggedIn() == true && $page=="status_view")
{
    include("views/idea_status/status_view.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="historico_list")
{
    include("views/idea_status/historico_list.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="status_his")
{
    include("views/idea_status/status_his.php");
}

/****************************IDEAS */

/****************************PROGRAMAS */

elseif ($login->isWhUserLoggedIn() == true && $page=="owof_config")
{
    include("views/owof/owof_config.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="program_list")
{
    include("views/programs/program_list.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="program_create_list")
{
    include("views/programs/program_create_list.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="program_report")
{
    include("views/programs/program_report.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="program_data")
{
    include("views/programs/program_data.php");
}

/****************************PROGRAMAS */

elseif ($login->isWhUserLoggedIn() == true && $page=="error_atender_resolver")
{
    include("views/error/atender_resolver.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="atender_resolver_list")
{
    include("views/error/atender_resolver_list.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="atender_list")
{
    include("views/error/atender_list.php");
}

/***************************Maquinas*****************************/

elseif ($login->isWhUserLoggedIn() == true && $page=="alta_maquina")
{
    include("views/maquinas/alta_maquina.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="editar_maquina")
{
    include("views/maquinas/editar_maquina.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="detalles_maquina")
{
    include("views/maquinas/detalles_maquina.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="eliminar_maquina")
{
    include("views/maquinas/eliminar_maquina.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="asignar_maquina")
{
    include("views/maquinas/asignar_maquina.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_maquina")
{
    include("views/maquinas/lista_maquina.php");
}

/***************************reportes*****************************/


elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_fallas")
{
    include("views/reportes/reporte_fallas.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_fallas_resolver")
{
    include("views/reportes/reporte_fallas_resolver.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_equipos")
{
    include("views/reportes/reporte_equipos.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_general")
{
    include("views/reportes/reporte_general.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_detalles")
{
    include("views/reportes/reporte_detalles.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_fallas_atendidas")
{
    include("views/reportes/reporte_fallas_atendidas.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="reporte_departamentos")
{
    include("views/reportes/reporte_departamentos.php");
}

/****************************lineas******************************/

elseif ($login->isWhUserLoggedIn() == true && $page=="alta_linea")
{
    include("views/lineas/alta_linea.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_linea")
{
    include("views/lineas/lista_linea.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="editar_linea")
{
    include("views/lineas/editar_linea.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="detalles_linea")
{
    include("views/lineas/detalles_linea.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="eliminar_linea")
{
    include("views/lineas/eliminar_linea.php");
}


/***************************usuarios****************************/

elseif ($login->isWhUserLoggedIn() == true && $page=="usuario_nuevo")
{
    include("views/usuarios/usuario_nuevo.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_usuarios")
{
    include("views/usuarios/lista_usuarios.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="usuario_editar")
{
    include("views/usuarios/usuario_editar.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="usuario_borrar")
{
    include("views/usuarios/usuario_borrar.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_gerentes")
{
    include("views/usuarios/lista_gerentes.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_trabajadores")
{
    include("views/usuarios/lista_trabajadores.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="lista_soporte")
{
    include("views/usuarios/lista_soporte.php");
}


/***************************usuarios****************************/

/***********************estado de reporte***********************/

elseif ($login->isWhUserLoggedIn() == true && $page=="estado_reporte")
{
    include("views/estado/estado_reporte.php");
}

elseif ($login->isWhUserLoggedIn() == true && $page=="estado_reporte_datos")
{
    include("views/estado/estado_reporte_datos.php");
}

/***************************perfil****************************/
elseif ($login->isWhUserLoggedIn() == true && $page=="editar_perfil")
{
    include("views/perfil/editar_perfil.php");
}
/***************************perfil****************************/




elseif ($login->isWhUserLoggedIn() == true)
{
    include("views/logged_in.php");
}



else
{
    include("views/not_logged_in.php");
}

?>


<?php
require_once ("includes/footer.php");
?>


<script>
    
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
    })

    $( document ).ready(function() {
        $('#myModal').modal('show');
    });



    $(document).ready(function(){
        var url = "index.php?page=modalbox";
        jQuery('.modallink').click(function(e) {
            $('.modal-container').load(url,function(result){
                $('#myModal1').modal({show:true});
            });
        });
    });



$(function() {

// We can attach the `fileselect` event to all file inputs on the page
$(document).on('change', ':file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

// We can watch for our custom `fileselect` event like this
$(document).ready( function() {
    $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
});

});

</script>
