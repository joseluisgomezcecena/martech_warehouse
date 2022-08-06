<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php
//FUNCTIONS

?>

<section class="content-header">
    <h1>
        Movimientos.
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
                    <h3 class="box-title">Lista de movimientos</h3>
                </div>

                <div class="box-body">

                    <table style="width: 100%; font-size: 12px;" id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID Origen</th>
                            <th>ID Movimiento</th>
                            <th>Movimiento</th>
                            <th>Consumible</th>
                            <th># Parte</th>
                            <th>Descripción</th>
                            <th>Categoria</th>
                            <th>Marca</th>
                            <th>Proveedor</th>
                            <th>Planta</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th>Image</th>
                            <th>Responsable</th>
                            <th>Supervisor</th>
                            <th>Requisición</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $query = "SELECT * FROM tool_movimientos_historicos ORDER BY id DESC";
                        //$query = "SELECT * FROM tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id
                        // WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0 ORDER BY tool_movimientos.id DESC";

                        $result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_array($result)):
                            ?>

                            <?php
                            $query2 = mysqli_query($connection, "SELECT * FROM tool_herramienta WHERE id = {$row['herramienta_id']}");
                            $row2 = mysqli_fetch_array($query2);
                            ?>

                            <tr>
                                <td>*O<?php echo $row['id_salida'] ?></td>
                                
                                <td>*M<?php echo $row['id'] ?></td>

                                <td><?php if($row['tipo'] == 's'){echo "<b style='color:darkred'>SALIDA</b>";}else{echo "<b style='color:green'>ENTRADA</b>";} ?></td>

                                <td><?php if($row2['consumible'] == 1){echo "<b style='color:darkred'>SI</b>";}else{echo "<b style='color:green'>NO</b>";} ?></td>

                                <td><?php echo $row2['numero_parte'] ?></td>

                                <td><?php echo $row2['descripcion'] ?></td>

                                <td><?php echo $row2['categoria_id'] ?></td>

                                <td><?php echo $marca_id =  $row2['marca_id']; ?></td>

                                <td>
                                    <?php echo $proveedor_id =  $row2['proveedor_id']; ?>
                                </td>


                                <td><?php echo $row['planta_id'] ?></td>

                                <td><?php echo $row['movimiento_de'] ?></td>

                                <td><?php echo $row['movimiento_a'] ?></td>

                                <td><?php echo $row['cantidad'] ?></td>

                                <td><?php echo date_format(date_create($row['hora']) , "Y/m/d H:i:s")  ?></td>


                                <td><img class="img-responsive" src="<?php echo $row2['url'] ?>" width="100"></td>

                                <td><?php echo strtoupper($row['responsable']); ?> # <?php echo $row['responsable_numero']; ?></td>

                                <td><?php echo $row['supervisor']; ?></td>

                                <td><?php if($row['tipo'] == 's'){echo $row['requi'];}else{echo "N/A";} ?></td>

                            </tr>

                        <?php endwhile; ?>
                        </tbody>


                    </table>
                </div>

            </div>
            <!-- /.box -->
        </div>



    </div>
</section>