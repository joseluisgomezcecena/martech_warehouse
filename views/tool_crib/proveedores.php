<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
saveProveedor();
editProveedor();
deleteProveedor();

//FORMS
if(isset($_GET['edit']) && $_GET['edit'] == "true")
{
    include "includes/forms/tool_crib/proveedor_edit.php";
}

if(isset($_GET['delete']) && $_GET['delete'] == "true")
{
    include "includes/forms/tool_crib/proveedor_delete.php";
}

//MODALS
?>

<section class="content-header">
    <h1>
        Proveedores
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
                    <h3 class="box-title">Agregar Proveedor</h3>
                </div>
                <!-- /.box-header -->


                <!-- form start ../para entrar al archivo register.php por que estamos en views/usuarios/ -->
                <form method="post">
                    <div class="box-body">


                        <div class="form-group col-lg-12">
                            <label for="revision">Proveedor</label>
                            <input id="revision" class="login_input form-control" type="text"  name="proveedor"  required  />
                            <small>Nombre del proveedor <i style="color:red">*</i></small>
                        </div>
                        
                        <div class="form-group col-lg-12">
                            <label for="fecha">Telefono</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefono1">
                            <small>Telefono del proveedor.</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="fecha">Telefono secundario</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefono2">
                            <small>Telefono del proveedor.</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="fecha">Correo electronico</label>
                            <input type="email" class="form-control" name="email">
                            <small>Email del proveedor.</small>
                        </div>

                        
                        <div class="form-group col-lg-12">
                            <label for="fecha">Dirección</label>
                            <input type="text" class="form-control" name="direccion">
                            <small>Dirección del proveedor.</small>
                        </div>

                        
                        <div class="form-group col-lg-12">
                            <label for="fecha">Nombre del contacto</label>
                            <input type="text" class="form-control" name="contacto">
                            <small>Nombre de contacto.</small>
                        </div>
                    
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-flat" name="save_proveedor"><i class="fa fa-save"></i>&nbsp;&nbsp;Guardar</button>
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
                    <h3 class="box-title">Lista de proveedores</h3>
                </div>
               
                <div class="box-body">

                    <table style="width: 100%;" id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Proveedor</th>
                                <th>Telefonos</th>
                                <th>Email</th>
                                <th>Dirección</th>
                                <th>Contacto</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                                <?php 
                                $query = "SELECT * FROM tool_proveedores ORDER BY id DESC";
                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($result)):
                                ?>

                                    <tr>
                                        <td><?php echo $row['proveedor'] ?></td>
                                        <td><?php echo $row['telefono1'] ?><br><?php echo $row['telefono2'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['direccion'] ?></td>
                                        <td><?php echo $row['contacto'] ?></td>
                                        <td><a class="btn btn-default btn-flat" href='index.php?page=proveedores&edit=true&id=<?php echo $row['id'] ?>'><i class="fa fa-edit">&nbsp;&nbsp;</i>Editar</a></td>
                                        <td><a class="btn btn-danger btn-flat" href='index.php?page=proveedores&delete=true&id=<?php echo $row['id'] ?>'><i class="fa fa-times">&nbsp;&nbsp;</i>Eliminar</a></td>
                                    </tr>

                                <?php endwhile; ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Proveedor</th>
                                <th>Telefonos</th>
                                <th>Email</th>
                                <th>Dirección</th>
                                <th>Contacto</th>
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