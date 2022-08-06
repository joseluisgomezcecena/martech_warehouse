</div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<script src="assets/bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<script src="assets/myscripts/myscript.js"></script>


<?php
if($datatablesop == 1)
{
    echo "<script src=\"assets/bower_components/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
<script src=\"assets/datatables/fixed.js\"></script>
";
}
else
{
    echo "<script src=\"assets/datatables/jquery.dataTables.min.js\"></script>
<script src=\"assets/datatables/dataTables.buttons.min.js\"></script>
<script src=\"assets/datatables/jszip.min.js\"></script>
<script src=\"assets/datatables/pdfmake.min.js\"></script>
<script src=\"assets/datatables/vfs_fonts.js\"></script>
<script src=\"assets/datatables/buttons.html5.min.js\"></script>
<script src=\"assets/datatables/fixed.js\"></script>";

}
?>

<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.phone.extensions.js"></script>



<!-- AdminLTE for demo purposes
<script src="assets/dist/js/demo.js"></script>-->
<!-- DataTables -->
<!--
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
-->

<!--
<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.buttons.min.js"></script>
<script src="assets/datatables/jszip.min.js"></script>
<script src="assets/datatables/pdfmake.min.js"></script>
<script src="assets/datatables/vfs_fonts.js"></script>
<script src="assets/datatables/buttons.html5.min.js"></script>
-->
<script>

$(document).ready(function(){
   $('#inventory').DataTable({
      'scrollX': true,
      //'bSort': false,
      //'scrollCollapse': true,

      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'config/inventory_ajax.php?isadmin=<?php echo $_SESSION['wh_isadmin'] ?>'
      },
      'columns': [
         { data: 'planta_id' },
         { data: 'consumible' },
         { data: 'locacion' },
         { data: 'numero_parte' },
         { data: 'numero_parte_proveedor' },
         { data: 'descripcion' },
         { data: 'main_cat_id' },
         { data: 'categoria_id' },
         { data: 'marca_id' },
         { data: 'proveedor_id' },
         { data: 'uso' },
         { data: 'maximo' },
         { data: 'minimo' },
         { data: 'reorder_qty' },
         { data: 'stock' },
         { data: 'stock_disponible' },
         { data: 'url' },
         { data: 'mover_btn' },
         { data: 'editar_btn' },
         { data: 'borrar_btn' },
      ]
   });
});
</script>


<script>
    $(document).ready(function(){
        $('#movements').DataTable({
            'scrollX': true,


            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url':'config/movimientos_ajax.php?isadmin=<?php echo $_SESSION['wh_isadmin'] ?>'
            },
            'columns': [
                { data: 'numero_parte' },
                { data: 'descripcion' },
                { data: 'categoria_id' },
                { data: 'marca_id' },
                { data: 'proveedor_id' },
                { data: 'uso' },
                { data: 'planta_id' },
                { data: 'origen' },
                { data: 'destino' },
                { data: 'cantidad' },
                { data: 'cantidad_pendiente' },
                { data: 'hora' },
                { data: 'stock' },
                { data: 'url' },
                { data: 'responsable' },
                { data: 'regresar_btn' },
                { data: 'deshechar_btn' },
            ]
        });
    });
</script>


<script src="assets/myscripts/dropzonephotos.js"></script>

<script src="assets/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/datepicker/js/jquery.timepicker.min.js"></script>

<script>

    //input mask para fechas
    
    $('[data-mask]').inputmask()

    $.fn.datepicker.defaults.format = "yyyy-mm-dd";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });

</script>

<script>
    //formato de tiempo
    $('.timeformatExample1').timepicker({ 'timeFormat': 'H:i:s' });
</script>

<script>
    //datatables para presentar datos en toda la applicación


    $(document).ready(function() {
        //tres
        
        $('#example3').DataTable( {

           


            "scrollX": true,
            "bSort": false,
            "pageLength": 21,
           


        //idioma

                language: {
                    processing:     "Procesando...",
                    search:         "Buscar&nbsp;:",
                    lengthMenu:    "Mostrar _MENU_ elementos",
                    info:           "Mostrando _START_ a _END_ de _TOTAL_ elementos",
                    infoEmpty:      "Mostrando 0 a 0 de 0 elementos",
                    infoFiltered:   "(Filtrando; de _MAX_ elementos en total)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando datos...",
                    zeroRecords:    "No se encontro ningun registro",
                    emptyTable:     "No hay datos que mostrar",
                    paginate: {
                        first:      "Primero",
                        previous:   "Regresar",
                        next:       "Avanzar",
                        last:       "Ultimo"
                    },
                    aria: {
                        
                    }
                },

            //idioma



            dom: 'Bfrtip',
            buttons: [
                
                {
                    extend: 'excelHtml5',
                    title: 'Reporte Martech Medical West',
                    

                    
                    exportOptions: 
                    {
                        stripHtml: false,
                        format: 
                        {
                            body: function ( data, column, row ) 
                            {
                            return (column === 1 && column === 5) ? data.replace( /\n/g, '"&CHAR(10)&CHAR(13)&"' ) : data.replace(/(&nbsp;|<([^>]+)>)/ig, "");;
                            }
                        }
                    },



                    customize: function( xlsx ) 
                    {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c', sheet).attr( 's', '55' );
                    }
                    


                },
                
                {
                extend: 'csvHtml5',
                title: 'Reporte Martech Medical West ',




                },
                
                {
                extend: 'pdfHtml5',
                title: 'Reporte Martech Medical West ',
                orientation: 'landscape',
                pageSize: 'TABLOID',
                exportOptions: 
                    {
                        stripHtml: false,
                        
                        format: 
                        {
                            body: function ( data, column, row ) 
                            {
                            return (column === 1 && column === 5) ? data.replace( /\n/g, '"&CHAR(10)&CHAR(13)&"' ) : data.replace(/(&nbsp;|<([^>]+)>)/ig, "");;
                            }
                        }
                    },

                },
                
                {
                extend: 'copyHtml5',
                title: 'Reporte Martech Medical West '
                }

               

            ]


        } );

        //tres
    } );




    $(function () {
        $('#example1').DataTable({
            "scrollX": true,
            "bSort": false,
            "scrollCollapse": true,
        
            fixedColumns:   {
                leftColumns: 2
            },
           
            
          

            language: {
                    processing:     "Procesando...",
                    search:         "Buscar&nbsp;:",
                    lengthMenu:    "Mostrar _MENU_ elementos",
                    info:           "Mostrando _START_ a _END_ de _TOTAL_ elementos",
                    infoEmpty:      "Mostrando 0 a 0 de 0 elementos",
                    infoFiltered:   "(Filtrando; de _MAX_ elementos en total)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando datos...",
                    zeroRecords:    "No se encontro ningun registro",
                    emptyTable:     "No hay datos que mostrar",
                    paginate: {
                        first:      "Primero",
                        previous:   "Regresar",
                        next:       "Avanzar",
                        last:       "Ultimo"
                    },
                    aria: {
                        //sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        //sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }

            
        })
        
     
        
         $('#example2').DataTable({
            "scrollX": true,
            "bSort": false,
            "scrollCollapse": true,
            "pageLength": 151,
        
            
            
          

            language: {
                    processing:     "Procesando...",
                    search:         "Buscar&nbsp;:",
                    lengthMenu:    "Mostrar _MENU_ elementos",
                    info:           "Mostrando _START_ a _END_ de _TOTAL_ elementos",
                    infoEmpty:      "Mostrando 0 a 0 de 0 elementos",
                    infoFiltered:   "(Filtrando; de _MAX_ elementos en total)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando datos...",
                    zeroRecords:    "No se encontro ningun registro",
                    emptyTable:     "No hay datos que mostrar",
                    paginate: {
                        first:      "Primero",
                        previous:   "Regresar",
                        next:       "Avanzar",
                        last:       "Ultimo"
                    },
                    aria: {
                        //sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        //sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }


                

            
        })






        $('#example7').DataTable().ajax.reload(3000);




    });//end document ready

    


    





    //funcion para hacer ajax request y desplegar datos en tiempo real
    /*
    (function worker() {
    $.ajax({
        url: 'index.php', 
        success: function(data) {

        $("#mitabla").load(location.href+" #mitabla>*","");//logged_in 

         $("#mitabla2").load(location.href+" #mitabla2>*",""); //logged_in tabla de atendidos pero no resueltos
        
        $("#misalertas").load(location.href+" #misalertas>*","");

        $("#misalertas-detalles").load(location.href+" #misalertas-detalles>*","");

        $("#atender").load(location.href+" #atender>*","");

        $("#panel_error").load(location.href+" #panel_error>*","");//includes panels
        
        $("#panel_resolver").load(location.href+" #panel_resolver>*","");//includes panels

         $("#excel").load(location.href+" #excel>*","");

        },
        complete: function() {
        // Siguiente peticion de ajax cuando la actual este terminada
        setTimeout(worker, 5000);
        
        }
    });
    })();
*/
</script>

<script>

    //atencion de fallas, atender_form.php

    /*
    $('#descripcion_atencion').hide(200);

    $('#error_operador').change(function(){
        if($('#error_operador').val()=="si"){
            $('#descripcion_atencion').show(200);
        }
        else
        {
            $('#descripcion_atencion').hide(200);
        }
    })
    */
</script>

<script>
 
    //niveles de usuario, para el registro usuario_nuevo.php
    
    if($('#nivel').val()=='lider' || $('#nivel').val()=='supervisor' || $('#nivel').val()=='gerente produccion' || $('#nivel').val()=='gerente operaciones' || $('#nivel').val()=='gerente planta')
    {
        $('#super3').hide();
        $('#super5').hide();
        $('#super').hide();    
    }
    else
    {
        $('#super3').show();
        $('#super5').show();
        $('#super').show();

    }
    
    
    $('#nivel').change(function(){
        
        if($('#nivel').val()=='mantenimiento')
        {
            $('#super').show(200);
            $('#super2').required = true;

            $('#super3').show(200);
            $('#super4').required = true;

            $('#super5').show(200);
            $('#super6').required = true;


        }
        else if($('#nivel').val()=='maquinas')
        {
            $('#super').show(200);
            $('#super2').required = true;

            $('#super3').show(200);
            $('#super4').required = true;

            $('#super5').show(200);
            $('#super6').required = true;


        }
        else if($('#nivel').val()=='ingenieria')
        {
            $('#super').show(200);
            $('#super2').required = true;
        
            $('#super3').show(200);
            $('#super4').required = true;

            $('#super5').show(200);
            $('#super6').required = true;

        
        }
        else if($('#nivel').val()=='ingenieria calidad')
        {
            $('#super').show(200);
            $('#super2').required = true;

            $('#super3').show(200);
            $('#super4').required = true;

            $('#super5').show(200);
            $('#super6').required = true;


        }
        else if($('#nivel').val()=='materiales')
        {
            $('#super').show(200);
            $('#super2').required = true;

            $('#super3').show(200);
            $('#super4').required = true;

            $('#super5').show(200);
            $('#super6').required = true;


        }
        else
        {
            $('#super').hide(200);
            $('#super2').required = false;

            $('#super3').hide(200);
            $('#super4').required = false;

            $('#super5').hide(200);
            $('#super6').required = false;


        }

        
    })
    
</script>

<script>
$('#acceptedop').hide();

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$('#accepted').change(function(){
        
        

        if($('#accepted').val()=='2')
        {
            $('#acceptedop').show(200);
            
        }
        else
        {
            $('#acceptedop').hide(200);
        }
});


</script>

<script>
$('#save').hide();


$("#continuar").on('click',function(){
    
    //alert("ola");
    var table = $('#example2').DataTable();
    table
    .search( '' )
    .columns().search( '' )
    .draw();

    $('#save').show(300);

    //click a boton de submit
    $("input[name='new_action']")[0].click();


});


function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


</script>


<script>
function check1()
{
    var maximo=document.forms["altas"]["maximo"].value;
    var minimo=document.forms["altas"]["minimo"].value;

    if(maximo <= minimo){
        alert("El maximo no puede ser menor o igual que el minimo")
    }   
}
 
</script>
</body>
</html>
