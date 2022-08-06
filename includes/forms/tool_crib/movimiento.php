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


<form method="post" autocomplete="off">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Mover <?php echo $row['descripcion']." #Parte: ".$row['numero_parte'] ?></h4>
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
                    elseif($error == "inventory")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>No hay stock suficiente.</h2></div>";
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
                                    <div class="form-group col-lg-12">
                                        <label>Planta</label>

                                        <input type="hidden" name="planta_id" value="<?php echo $row['planta_id'] ?>">

                                        <select  name="planta_id" class="form-control readonly" readonly disabled>
                                            <option value="">Seleccione</option>
                                            <option <?php if($row['planta_id'] == "Planta 1"){echo "selected";}else{echo "";} ?> >Planta 1</option>
                                            <option <?php if($row['planta_id'] == "Planta 2"){echo "selected";}else{echo "";} ?> >Planta 2</option>
                                            <option <?php if($row['planta_id'] == "Planta 3"){echo "selected";}else{echo "";} ?> >Planta 3</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Ubicación</label>
                                        <input type="text" name="ubicacion" class="form-control" required>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Cantidad</label>
                                        <input type="number" name="cantidad" class="form-control" required>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Entregado a</label>
                                        <input type="text" name="responsable" class="form-control" required>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Numero de empleado</label>
                                        <input type="number" name="responsable_numero" class="form-control" required>
                                    </div>

                                    <?php 
                                    if($row['consumible'] == "si")
                                    {
                                    ?>
                                    <div class="form-group col-lg-12">
                                        <label>Numero de Requisición</label>
                                        <input type="text" name="requi" class="form-control" required>
                                    </div>
                                    <?php 
                                    }
                                    else
                                    {
                                    ?>
                                        <input type="hidden" name="requi" class="form-control" value="No requerido">
                                    <?php
                                    }
                                    ?>

                                    <div class="form-group col-lg-12">
                                        <label>Supervisor</label>
                                        <input type="text" name="supervisor" class="form-control" required>
                                    </div>

                                   
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    
                    <input  type="submit" name="save_movimiento" class="btn btn-primary btn-flat" value="Guardar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
