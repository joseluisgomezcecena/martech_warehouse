<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
altas();
regresar();

//FORMS
if(isset($_GET['altas']) && $_GET['altas'] == "true")
{
    include "includes/forms/tool_crib/altas.php";
}

if(isset($_GET['movimiento_regresar']) && $_GET['movimiento_regresar'] == "true")
{
    include "includes/forms/tool_crib/movimiento_regresar.php";
}


//MODALS
?>

<section class="content-header">
    <h1>
        Material en planta.
        <small>TOOL CRIB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Tool Crib</li>
    </ol>
</section>












<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de materiales</h3>
                </div>
               
                <div class="box-body">

                    <table style="width: 100%; font-size: 12px;" id="movements" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th># Parte</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Proveedor</th>
                                <th>Uso</th>
                                <th>Planta</th>
                                <th>Origen</th>
                                <th>Ubicación Actual</th>
                                <th>Cantidad</th>
                                <th>Pendientes</th>
                                <th>Fecha</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Entregado a:</th>
                                <th>Regresar a Tool Crib</th>
                                <th>Desechar Equipo</th>
                                
                            </tr>
                        </thead>


                       
                    </table>
                </div>    
                
            </div>
            <!-- /.box -->
        </div>



    </div>
</section>
