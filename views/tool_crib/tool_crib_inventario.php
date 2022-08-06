<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
altas();
movimiento();
altasEdit();
altasDelete();

//FORMS
if(isset($_GET['edit']) && $_GET['edit'] == "true")
{
    include "includes/forms/tool_crib/editar_tools.php";
}

if(isset($_GET['delete']) && $_GET['delete'] == "true")
{
    include "includes/forms/tool_crib/borrar_tools.php";
}

if(isset($_GET['mov']) && $_GET['mov'] == "true")
{
    include "includes/forms/tool_crib/movimiento.php";
}

//MODALS
if(isset($_GET['error']) && $_GET['error'] == "inventory")
{
    include "includes/forms/tool_crib/movimiento.php";
}




?>

<section class="content-header">
    <h1>
        Inventario.
        <small>TOOL CRIB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Tool Crib</li>
    </ol>
</section>



<section style="margin-top: 50px;" class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Opciones de tool crib.</h3>
                </div>
                <!-- /.box-header -->
                <div  class="box-body">


                <a href="index.php?page=tool_crib_inventario">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-wrench"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Inventario</span>
                        <small style="font-size:11px; color:black;">Consulta el stock de herramientas asi como maximos y minimos.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>




                <a href="index.php?page=tool_crib_add_item">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-plus"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Altas</span>
                        <small style="font-size:11px; color:black;">Registra nuevas entradas en tool crib.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                <a href="index.php?page=tool_crib_mov">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-arrows-h"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">En planta</span>
                        <small style="font-size:11px; color:black;">Material en planta.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                <a href="index.php?page=tool_crib_historico">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-edit"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Historial</span>
                        <small style="font-size:11px; color:black;">Consulta todos los movimientos.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>








<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Inventario</h3>
                </div>
               
                <div class="box-body">


                    <table id='inventory' class='table display dataTable table-bordered table-striped table-hover'>

                        <thead>
                            <tr>
                                <th>planta</th>
                                <th>Consumible</th>
                                <th>Locación</th>
                                <th>#parte</th>
                                <th>#parte proveedor</th>
                                <th>descripcion</th>
                                <th>Main</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Proveedor</th>
                                <th>Uso</th>
                                <th>Maximo</th>
                                <th>Minimo</th>
                                <th>Reorder</th>
                                <th>Stock</th>
                                <th>Disponible</th>
                                <th>Imagen</th>
                                <th>Mover</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                                
                            </tr>
                        </thead>

                    </table>



                  
                </div>    
                
            </div>
            <!-- /.box -->
        </div>



    </div>
</section>