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
//no data

?>


<form method="post">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Altas</h4>
                </div>
                <div style="border-radius: 0" class="modal-body">


                    <?php

                   //GETTING ERRORS

                    if($error == "false")
                    { 
                        echo "<div class='col-lg-12 bg-info text-center'><h2>Se ha agregado con exito.</h2></div>";
                    }
                    elseif($error == "duplicated")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Ya existe un material igual</h2></div>";
                    }
                    elseif($error == "true")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Error al agregar </h2></div>";
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
                                    <div >

                                        <div class="form-group col-lg-6">
                                            <label>Numero de parte</label>
                                            <input name="numero_parte" class="form-control" >
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Descripción</label>
                                            <input name="descripcion" class="form-control" >
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label>Categoria</label>
                                            <select name="categoria_id" class="form-control">
                                                <option value="">Seleccione</option>
                                                <?php 
                                                $get_cat = mysqli_query($connection, "SELECT * FROM tool_categorias");
                                                while($row_cat = mysqli_fetch_array($get_cat)):
                                                ?>

                                                    <option value="<?php echo $row_cat['id'] ?>"><?php echo $row_cat['categoria'] ?></option>

                                                <?php endwhile ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Marca</label>
                                            <select name="marca_id" class="form-control">
                                                <option value="">Seleccione</option>
                                                <?php 
                                                $get_marca = mysqli_query($connection, "SELECT * FROM tool_marca");
                                                while($row_marca = mysqli_fetch_array($get_marca)):
                                                ?>

                                                    <option value="<?php echo $row_marca['id'] ?>"><?php echo $row_marca['marca'] ?></option>

                                                <?php endwhile ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Proveedor</label>
                                            <select name="proveedor_id" class="form-control">
                                                <option value="">Seleccione</option>
                                                <?php 
                                                $get_prov = mysqli_query($connection, "SELECT * FROM tool_proveedores");
                                                while($row_prov = mysqli_fetch_array($get_prov)):
                                                ?>

                                                    <option value="<?php echo $row_prov['id'] ?>"><?php echo $row_prov['proveedor'] ?></option>

                                                <?php endwhile ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-6">
                                            <label>Uso</label>
                                            <input name="uso" class="form-control" >
                                        </div>


                                        <div class="form-group col-lg-6">
                                            <label>Planta</label>
                                            <select name="planta_id" class="form-control">
                                                <option value="">Seleccione</option>
                                                <option value="1">MMW1</option>
                                                <option value="2">MMW2</option>
                                                <option value="3">MMW3</option>
                                            </select>
                                        </div>
                                    


                                        <div class="form-group col-lg-4">
                                            <label>Precio unitario</label>
                                            <input name="precio_unitario" type="number" class="form-control" >
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Maximo</label>
                                            <input name="maximo" type="number" class="form-control" >
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Minimo</label>
                                            <input name="minimo" type="number" class="form-control" >
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label>Reorder QTY</label>
                                            <input name="reorder_qty" type="number" class="form-control" >
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Stock</label>
                                            <input name="stock" type="number" class="form-control" >
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Descontinuado</label>
                                            <select name="descontinuado"  class="form-control" >
                                                    <option value="">Seleccione</option>
                                                    <option value="1">No</option>
                                                    <option value="0">Si</option>
                                            </select>
                                        </div>

                                        

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    
                    <input  type="submit" name="save_alta" class="btn btn-primary btn-flat" value="Guardar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
