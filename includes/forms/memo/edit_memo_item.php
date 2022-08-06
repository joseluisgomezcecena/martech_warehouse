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

$item = $_GET['item'];

?>


<form method="post">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Editar Material</h4>
                </div>
                <div style="border-radius: 0" class="modal-body">


                    <?php

                   //GETTING ERRORS

                    if($error == "false")
                    { 
                        echo "<div class='col-lg-12 bg-info text-center'><h2>Se ha editado  con exito.</h2></div>";
                    }
                    elseif($error == "duplicated")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Ya existe un material igual</h2></div>";
                    }
                    elseif($error == "true")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>Error al editar </h2></div>";
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


                                        <?php 
                                        
                                        $query = "SELECT * FROM memo_entrega_material_lis WHERE id = $item";
                                        $result = mysqli_query($connection, $query);
                                        $row = mysqli_fetch_array($result);
                                        ?>
                                        
                                        

                                        <div class="form-group col-lg-12">
                                            <label id="edit_actuals_programa">El siguiente material sera editado.</label>
                                            <br><br/>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>CERT</label>
                                            <input name="cert" class="form-control" value="<?php echo $row['cert'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Numero de parte</label>
                                            <input name="num_part_martech" class="form-control" value="<?php echo $row['num_part_martech'] ?>">
                                        </div>                                     
                                        
                                        <div class="form-group col-lg-12">
                                            <label>Lote</label>
                                            <input name="lote" class="form-control" value="<?php echo $row['lote'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Descripcion</label>
                                            <input name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Cantidad</label>
                                            <input name="cantidad" class="form-control" value="<?php echo $row['cantidad'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Unidad de medida</label>
                                            <input name="udm" class="form-control" value="<?php echo $row['udm'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Recibió</label>
                                            <input name="recibio" class="form-control" value="<?php echo $row['recibio'] ?>">
                                        </div>
                                        
                                        <div class="form-group col-lg-12">
                                            <label>Vendedor</label>
                                            <input name="vendedor" class="form-control" value="<?php echo $row['vendedor'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Comprador</label>
                                            <input name="comprador" class="form-control" value="<?php echo $row['comprador'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Orden de compra</label>
                                            <input name="orden_compra" class="form-control" value="<?php echo $row['orden_compra'] ?>">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Ubicación</label>
                                            <input name="ubicacion" class="form-control" value="<?php echo $row['ubicacion'] ?>">
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
                    
                    <input  type="submit" name="edit_memo_item" class="btn btn-primary btn-flat" value="Editar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
