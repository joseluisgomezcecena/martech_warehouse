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

$query = "SELECT * FROM tool_herramienta WHERE id = $id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

?>


<form method="post" enctype="multipart/form-data">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Editar <?php echo $row['numero_parte']." ".$row['descripcion']?></h4>
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
                                    
                                    <div class="form-group col-lg-4">
                                        <label>Consumible</label>
                                        <select name="consumible" class="form-control" required> 
                                            <option value="">Seleccione</option>
                                            <option <?php if($row['consumible']=="Si")echo "selected"; else echo ""; ?> value="Si">Si</option>
                                            <option <?php if($row['consumible']=="No")echo "selected"; else echo ""; ?> value="No">No</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Numero de parte</label>
                                        <input name="numero_parte" class="form-control" value="<?php echo $row['numero_parte'] ?>">
                                    </div>


                                    <div class="form-group col-lg-4">
                                        <label>Numero de parte del proveedor</label>
                                        <input name="numero_parte_proveedor" class="form-control" value="<?php echo $row['numero_parte_proveedor'] ?>" >
                                    </div>


                                    <div class="form-group col-lg-4">
                                        <label>Descripción</label>
                                        <input name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>">
                                    </div>


                                    <div class="form-group col-lg-4">
                                        <label>Categoria Principal</label>
                                        <select name="main_cat_id" class="form-control">
                                            <option value="">Seleccione</option>
                                            <?php 
                                            $get_cat = mysqli_query($connection, "SELECT * FROM main_cat");
                                            while($row_cat = mysqli_fetch_array($get_cat)):
                                            ?>

                                                <option <?php if($row_cat['main_cat'] == $row['main_cat_id']) ?>><?php echo $row_cat['main_cat'] ?></option>

                                            <?php endwhile ?>
                                        </select>
                                    </div>







                                    <div class="form-group col-lg-4">
                                        <label>Categoria</label>
                                        <select name="categoria_id" class="form-control">
                                            <option value="">Seleccione</option>
                                            <?php 
                                            $get_cat = mysqli_query($connection, "SELECT * FROM tool_categorias");
                                            while($row_cat = mysqli_fetch_array($get_cat)):
                                            ?>

                                                <option <?php if($row['categoria_id'] == $row_cat['categoria']) echo "selected"; else echo ""; ?> ><?php echo $row_cat['categoria'] ?></option>

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

                                                    <option <?php if($row['marca_id'] == $row_marca['marca'])echo "selected"; else echo "";  ?> ><?php echo $row_marca['marca'] ?></option>

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

                                                    <option <?php if($row['proveedor_id'] == $row_prov['proveedor']){echo "selected";}else{echo "";} ?> ><?php echo $row_prov['proveedor'] ?></option>

                                                <?php endwhile ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Uso</label>
                                            <input name="uso" class="form-control" value="<?php echo $row['uso'] ?>">
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Planta</label>
                                            <select name="planta_id" class="form-control">
                                                <option value="">Seleccione</option>
                                                <option <?php if($row['planta_id']== "Planta 1"){echo"selected";}else{echo"";}  ?>>Planta 1</option>
                                                <option <?php if($row['planta_id']== "Planta 2"){echo"selected";}else{echo"";}  ?>>Planta 2</option>
                                                <option <?php if($row['planta_id']== "Planta 3"){echo"selected";}else{echo"";}  ?>>Planta 3</option>
                                            </select>
                                        </div>
                                    


                                        <div class="form-group col-lg-4">
                                            <label>Precio unitario</label>
                                            <input name="precio_unitario" type="number" class="form-control" value="<?php echo $row['precio_unitario'] ?>">
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Maximo</label>
                                            <input name="maximo" type="number" class="form-control" value="<?php echo $row['maximo'] ?>">
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Minimo</label>
                                            <input name="minimo" type="number" class="form-control" value="<?php echo $row['minimo'] ?>">
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label>Reorder QTY</label>
                                            <input name="reorder_qty" type="number" class="form-control" value="<?php echo $row['reorder_qty'] ?>">
                                        </div>




                                        <div class="form-group col-lg-4">
                                            <label>Stock</label>
                                            <input name="stock" type="number" class="form-control" value="<?php echo $row['stock'] ?>">
                                        </div>


                                        <div class="form-group col-lg-4">
                                            <label>Stock Disponible</label>
                                            <input name="stock_disponible" type="number" class="form-control" value="<?php echo $row['stock_disponible'] ?>">
                                        </div>



                                        <div class="form-group col-lg-4">
                                            <label>Locacion</label>
                                            <input name="locacion" type="text"  class="form-control" value="<?php echo $row['locacion'] ?>" >
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label>Descontinuado</label>
                                            <select name="descontinuado"  class="form-control" >
                                                    <option value="">Seleccione</option>
                                                    <option <?php if($row['descontinuado']== 1){echo"selected";}else{echo"";}  ?> value="1">Si</option>
                                                    <option <?php if($row['descontinuado']== 0){echo"selected";}else{echo"";}  ?> value="0">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Imagen</label>
                                            <input type='file' name="fileToUpload" onchange="readURL(this);" />
                                            <br><br/>
                                            <?php if($row['url'] == ""){ ?>
                                            <img class="img-responsive" id="blah" src="img/noimage.jpg" alt="your image" />
                                            <?php }else{ ?>
                                                <img class="img-responsive" id="blah" src="<?php echo $row['url'] ?>" alt="your image" />
                                            <?php } ?>
                                        </div>
                                   
                                   
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    
                    <input  type="submit" name="edit_alta" class="btn btn-primary btn-flat" value="Guardar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
