<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
altas();

//FORMS
if(isset($_GET['altas']) && $_GET['altas'] == "true")
{
    include "includes/forms/tool_crib/altas.php";
}


//MODALS
?>

<style>
img{
  max-width:180px;
}

</style>

<section class="content-header">
    <h1>
        Altas.
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
                    <h3 class="box-title">Catalogo e Inventario</h3>
                </div>
               
                <div class="box-body">



                    <form method="post" id="altas" enctype="multipart/form-data" autocomplete="off">
                    

                        <div class="form-group col-lg-2">
                            <label>Consumible</label>
                            <select name="consumible" class="form-control" required> 
                                <option value="">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Numero de parte</label>
                            <input name="numero_parte" class="form-control" >
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Numero de parte del proveedor</label>
                            <input name="numero_parte_proveedor" class="form-control" >
                        </div>

                        <div class="form-group col-lg-4">
                            <label>Descripción</label>
                            <input name="descripcion" class="form-control" >
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Categoria Principal</label>
                            <select name="main_cat_id" class="form-control">
                                <option value="">Seleccione</option>
                                <?php 
                                $get_cat = mysqli_query($connection, "SELECT * FROM main_cat");
                                while($row_cat = mysqli_fetch_array($get_cat)):
                                ?>

                                    <option><?php echo $row_cat['main_cat'] ?></option>

                                <?php endwhile ?>
                            </select>
                        </div>



                        <div class="form-group col-lg-3">
                            <label>Categoria</label>
                            <select name="categoria_id" class="form-control">
                                <option value="">Seleccione</option>
                                <?php 
                                $get_cat = mysqli_query($connection, "SELECT * FROM tool_categorias");
                                while($row_cat = mysqli_fetch_array($get_cat)):
                                ?>

                                    <option ><?php echo $row_cat['categoria'] ?></option>

                                <?php endwhile ?>
                            </select>
                        </div>


                        <div class="form-group col-lg-3">
                            <label>Marca</label>
                            <select name="marca_id" class="form-control">
                                <option value="">Seleccione</option>
                                <?php 
                                $get_marca = mysqli_query($connection, "SELECT * FROM tool_marca");
                                while($row_marca = mysqli_fetch_array($get_marca)):
                                ?>

                                    <option><?php echo $row_marca['marca'] ?></option>

                                <?php endwhile ?>
                            </select>
                        </div>


                        <div class="form-group col-lg-3">
                            <label>Proveedor</label>
                            <select name="proveedor_id" class="form-control">
                                <option value="">Seleccione</option>
                                <?php 
                                $get_prov = mysqli_query($connection, "SELECT * FROM tool_proveedores");
                                while($row_prov = mysqli_fetch_array($get_prov)):
                                ?>

                                    <option ><?php echo $row_prov['proveedor'] ?></option>

                                <?php endwhile ?>
                            </select>
                        </div>


                        <div class="form-group col-lg-2">
                            <label>Uso</label>
                            <input name="uso" class="form-control" >
                        </div>


                        <div class="form-group col-lg-2">
                            <label>Planta</label>
                            <select name="planta_id" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="Planta 1">Planta 1</option>
                                <option value="Planta 2">Planta 2</option>
                                <option value="Planta 3">Planta 3</option>
                            </select>
                        </div>
                    


                        <div class="form-group col-lg-2">
                            <label>Precio unitario</label>
                            <input name="precio_unitario" type="number" class="form-control" >
                        </div>


                        <div class="form-group col-lg-2">
                            <label>Maximo</label>
                            <input name="maximo" id="maximo" type="number" onkeydown="return event.keyCode !== 69" class="form-control" >
                        </div>


                        <div class="form-group col-lg-2">
                            <label>Minimo</label>
                            <input name="minimo" id="minimo" type="number" onkeydown="return event.keyCode !== 69"   class="form-control" >
                        </div>

                        <div class="form-group col-lg-2">
                            <label>Reorder QTY</label>
                            <input name="reorder_qty" type="number" onkeydown="return event.keyCode !== 69" class="form-control" >
                        </div>


                        <div class="form-group col-lg-3">
                            <label>Stock</label>
                            <input name="stock" type="number" onkeydown="return event.keyCode !== 69" class="form-control" >
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Locacion</label>
                            <input name="locacion" type="text"  class="form-control" >
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Entregado por</label>
                            <input name="entregado" type="text"  class="form-control" >
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Numero de empleado</label>
                            <input name="entregado_numero" type="text"  class="form-control" >
                        </div>

                        <div class="form-group col-lg-2">
                            <label>Descontinuado</label>
                            <select name="descontinuado"  class="form-control" >
                                <option value="">Seleccione</option>
                                <option value="1">No</option>
                                <option value="0">Si</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-12">
                            <label>Imagen</label>
                            <input type='file' name="fileToUpload" onchange="readURL(this);" />
                            <br><br/>
                            <img id="blah" src="img/noimage.jpg" alt="your image" />
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="submit" name="save_alta" class="btn btn-primary" value="Guardar">
                        </div>
                        


                    </form>


                    
                </div>    
                
            </div>
            <!-- /.box -->
        </div>



    </div>
</section>