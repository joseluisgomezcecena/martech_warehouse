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

echo $query = "SELECT * FROM tool_movimientos WHERE id = $id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
echo $row['herramienta_id'];

echo $query2 = "SELECT * FROM tool_herramienta WHERE id = {$row['herramienta_id']}";
$result2 = mysqli_query($connection, $query2);
$row2 = mysqli_fetch_array($result2);

?>


<form method="post">


    <div style="border-radius: 0;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#4285F4; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Regresar <?php echo $row2['descripcion']." #Parte: ".$row2['numero_parte'] ?></h4>
                </div>
                <div style="border-radius: 0" class="modal-body">


                    <?php

                   //GETTING ERRORS

                    if($error == "false")
                    { 
                        echo "<div class='col-lg-12 bg-info text-center'><h2>Se ha agregado con exito.</h2></div>";
                    }
                    elseif($error == "cantidad")
                    {
                        echo "<div class='col-lg-12 bg-danger text-danger text-center'><h2>La cantidad a regresar es mayor a la que se tiene.</h2></div>";
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
                                        <br>
                                        Regresando a : <?php echo $row['planta_id'] ?>
                                        <input type="hidden" value="<?php echo $row['planta_id'] ?>" name="planta_id">
                                        <!--
                                        <select  name="planta_id" class="form-control" required readonly>
                                            <option value="">Seleccione</option>
                                            <option <?php if($row['planta_id'] == 1){echo "selected";}else{echo "";} ?> value="1">MMW1</option>
                                            <option <?php if($row['planta_id'] == 2){echo "selected";}else{echo "";} ?> value="2">MMW2</option>
                                            <option <?php if($row['planta_id'] == 3){echo "selected";}else{echo "";} ?> value="3">MMW3</option>
                                        </select>
                                        -->
                                    </div>

                                    <!--
                                    <div class="form-group col-lg-12">
                                        <label>Ubicación</label>
                                        <input type="text" name="ubicacion" class="form-control" required>
                                    </div>
                                    -->

                                    <div class="form-group col-lg-12">
                                        <label>Cantidad a regresar: (Se enviaron <?php echo $row['cantidad'] ?> Faltan: <?php echo $row['cantidad_pendiente'] ?>  )</label>
                                        <input type="number" name="cantidad" class="form-control" required>
                                    </div>


                                    <div class="form-group col-lg-12">
                                        <label>Entregado por:</label>
                                        <input type="text" name="responsable" class="form-control" required>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Numero de empleado</label>
                                        <input type="number" name="responsable_numero" class="form-control" required>
                                    </div>

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
                    
                    <input  type="submit" name="save_regresar" class="btn btn-primary btn-flat" value="Guardar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
