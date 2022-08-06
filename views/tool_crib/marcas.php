<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
saveMarca();
editMarca();
deleteMarca();

//FORMS
if(isset($_GET['edit']) && $_GET['edit'] == "true")
{
    include "includes/forms/tool_crib/marcas_edit.php";
}

if(isset($_GET['delete']) && $_GET['delete'] == "true")
{
    include "includes/forms/tool_crib/marcas_delete.php";
}

//MODALS
?>

<section class="content-header">
    <h1>
        Marcas
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
        <div class="col-md-3">
            <!-- general form elements -->
            <div  class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Marcas</h3>
                </div>
                <!-- /.box-header -->


                <!-- form start ../para entrar al archivo register.php por que estamos en views/usuarios/ -->
                <form method="post">
                    <div class="box-body">


                        <div class="form-group col-lg-12">
                            <label for="revision">Marca</label>
                            <input id="revision" class="login_input form-control" type="text"  name="marca"  required  />
                            <small>Categoria <i style="color:red">*</i></small>
                        </div>
                        
                        
                    
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-flat" name="save_marca"><i class="fa fa-save"></i>&nbsp;&nbsp;Guardar</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.box -->
        </div>




        <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de marcas</h3>
                </div>
               
                <div class="box-body">

                    <table style="width: 100%;" id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                                <?php 
                                $query = "SELECT * FROM tool_marca ORDER BY id DESC";
                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($result)):
                                ?>

                                    <tr>
                                        <td><?php echo $row['marca'] ?></td>
                                        <td><a class="btn btn-default btn-flat" href='index.php?page=marcas&edit=true&id=<?php echo $row['id'] ?>'><i class="fa fa-edit">&nbsp;&nbsp;</i>Editar</a></td>
                                        <td><a class="btn btn-danger btn-flat" href='index.php?page=marcas&delete=true&id=<?php echo $row['id'] ?>'><i class="fa fa-times">&nbsp;&nbsp;</i>Eliminar</a></td>
                                    </tr>

                                <?php endwhile; ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Marca</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>    
                
            </div>
            <!-- /.box -->
        </div>



    </div>
</section>