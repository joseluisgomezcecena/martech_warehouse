<?php
//INITIALIZE VARIABLE
$style = "";

//GET ERROR DATA
if(isset($_GET['error']))
{
    $error = $_GET['error'];
}
else
{
    $error ="";
}

//GET DATA ID
$id = $_GET['id'];

$query = "SELECT * FROM tool_proveedores WHERE id = $id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

?>


<form method="post">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Editar <?php echo $row['proveedor']?></h4>
                </div>
                <div style="border-radius: 0" class="modal-body">


                    <?php

                   //GETTING ERRORS

                    if($error == "false")
                    { 
                        echo "<div class='col-lg-12 bg-info text-center'><h2>Se ha editado con exito.</h2></div>";
                    }
                    elseif($error == "duplicated")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Ya existe un proveedor igual.</h2></div>";
                    }
                    elseif($error == "true")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Error al editar. </h2></div>";
                    }
                    else
                    {
                        echo "";   
                    }
                    ?>


                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div <?php echo $style ?> >
                                    
                                    <!-- /.box-header -->
                                    
                                    <div class="form-group col-lg-12">
                                        <label for="revision">Proveedor</label>
                                        <input id="revision" class="login_input form-control" type="text"  name="proveedor" value="<?php echo $row['proveedor']; ?>"  required  />
                                        <small>Nombre del proveedor <i style="color:red">*</i></small>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <label for="fecha">Telefono</label>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefono1" value="<?php echo $row['telefono1']; ?>">
                                        <small>Telefono del proveedor.</small>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="fecha">Telefono secundario</label>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefono2" value="<?php echo $row['telefono2']; ?>">
                                        <small>Telefono del proveedor.</small>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="fecha">Correo electronico</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                        <small>Email del proveedor.</small>
                                    </div>

                                    
                                    <div class="form-group col-lg-12">
                                        <label for="fecha">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>">
                                        <small>Dirección del proveedor.</small>
                                    </div>

                                    
                                    <div class="form-group col-lg-12">
                                        <label for="fecha">Nombre del contacto</label>
                                        <input type="text" class="form-control" name="contacto" value="<?php echo $row['contacto']; ?>">
                                        <small>Nombre de contacto.</small>
                                    </div>
                                   
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    
                    <input  type="submit" name="edit_proveedor" class="btn btn-primary btn-flat" value="Guardar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
