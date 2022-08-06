<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php
//FUNCTIONS

?>

<section class="content-header">
    <h1>
        Historico de Altas.
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
                    <h3 class="box-title">Lista </h3>
                </div>

                <div class="box-body">

                    <table style="width: 100%; font-size: 12px;" id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tool_id</th>
                            <th>Consumible</th>
                            <th># Parte</th>
                            <th># Parte Proveedor</th>
                            <th>Descripción</th>
                            <th>Categoria Principal</th>
                            <th>Categoria</th>
                            <th>Marca</th>
                            <th>Proveedor</th>
                            <th>Planta</th>
                            <th>Precio Unitario</th>
                            <th>Stock</th>
                            <th>Imagen</th>
                            <th>Entregado Por</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $query = "SELECT * FROM tool_altas ORDER BY id DESC";
                        //$query = "SELECT * FROM tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id
                        // WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0 ORDER BY tool_movimientos.id DESC";

                        $result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_array($result)):
                            ?>

                           

                            <tr>
                                <td><?php echo $row['id'] ?></td>

                                <td><?php echo $row['tool_id'] ?></td>


                                <td><?php if($row['consumible'] == "Si"){echo "<b style='color:darkred'>SI</b>";}else{echo "<b style='color:green'>NO</b>";} ?></td>

                                <td><?php echo $row['numero_parte'] ?></td>

                                <td><?php echo $row['numero_parte_proveedor'] ?></td>


                                <td><?php echo $row['descripcion'] ?></td>

                                <td><?php echo $row['main_cat_id'] ?></td>

                                <td><?php echo $row['categoria_id'] ?></td>

                                <td><?php echo $marca_id =  $row['marca_id']; ?></td>

                                <td>
                                    <?php echo $proveedor_id =  $row['proveedor_id']; ?>
                                </td>

                                <td><?php echo $marca_id =  $row['planta_id']; ?></td>

                                <td><?php echo $marca_id =  $row['precio_unitario']; ?></td>

                                <td><?php echo $marca_id =  $row['stock']; ?></td>

                                <td><img class="img-responsive" src="<?php echo $marca_id =  $row['url']; ?>"></td>

                                <td><?php echo $marca_id =  $row['entrego']; ?></td>

                                <td><?php echo $marca_id =  $row['fecha']; ?></td>

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