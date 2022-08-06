<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php");?>


<section class="content-header">
    <h1>
        Inicio 
        <small>Panel de control </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel de control</li>
    </ol>
</section>


<?php 
if(isset($_GET['update_idea']))
{
    if($_GET['update_idea'] == "true")
    {
        include("includes/system_modals/success/success.php");
    }
    else
    {
        include("includes/system_modals/error/error.php");
    }
}
//require_once("includes/idea_panels.php");
?>

<section style="margin-top: 50px;" class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Programas disponibles</h3>
                </div>
                <!-- /.box-header -->
                <div  class="box-body">
                   

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-file-o"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:11px;" class="info-box-text">Memorandum</span>
                        <span class="info-box-number">
                            <a href="index.php?page=entregas_form"><small>Ir</small></span></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-wrench"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:11px;" class="info-box-text">Tool Crib</span>
                        <span class="info-box-number">
                            <a href="index.php?page=tool_crib_inventario"><small>Ir</small></span></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>





                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>









