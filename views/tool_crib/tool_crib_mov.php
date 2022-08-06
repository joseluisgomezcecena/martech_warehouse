<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
altas();
regresar();

//FORMS
if(isset($_GET['altas']) && $_GET['altas'] == "true")
{
    include "includes/forms/tool_crib/altas.php";
}

if(isset($_GET['movimiento_regresar']) && $_GET['movimiento_regresar'] == "true")
{
    include "includes/forms/tool_crib/movimiento_regresar.php";
}


//MODALS
?>

<section class="content-header">
    <h1>
        Material en planta.
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
                    <h3 class="box-title">Lista de materiales</h3>
                </div>
               
                <div class="box-body">

                    <table style="width: 100%; font-size: 12px;" id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th># Parte</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Proveedor</th>
                                <th>Uso</th>
                                <th>Planta</th>
                                <th>Origen</th>
                                <th>Ubicación Actual</th>
                                <th>Cantidad</th>
                                <th>Pendientes</th>
                                <th>Fecha</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Entregado a:</th>
                                <th>Regresar a Tool Crib</th>
                                <th>Desechar Equipo</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                                <?php 
                                //$query = "SELECT * FROM tool_movimientos WHERE tipo = 's' AND cantidad_pendiente > 0  ORDER BY id DESC";
                                $query = "SELECT * FROM tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id
                                WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0 ORDER BY tool_movimientos.id DESC";

                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($result)):
                                ?>

                                    <?php 
                                    $query2 = mysqli_query($connection, "SELECT * FROM tool_herramienta WHERE id = {$row['herramienta_id']}");
                                    $row2 = mysqli_fetch_array($query2);
                                    ?>

                                    <tr>
                                        <td><?php echo $row2['numero_parte'] ?></td>
                                        
                                        <td><?php echo $row2['descripcion'] ?></td>
                                        
                                        <td>
                                            <?php 
                                               echo  $categoria_id =  $row2['categoria_id'];
                                            ?>
                                        </td>

                                        <td>
                                            <?php 
                                                echo $marca_id =  $row2['marca_id'];
                                            ?>
                                        </td>
                                        
                                        <td>
                                            <?php 
                                                echo $proveedor_id =  $row2['proveedor_id']; 
                                            ?>
                                        </td>

                                        <td><?php echo $row2['uso'] ?></td>

                                        <td><?php echo $row['planta_id'] ?></td>

                                        <td><?php echo $row['movimiento_de'] ?></td>

                                        <td><?php echo $row['movimiento_a'] ?></td>

                                        <td><?php echo $row['cantidad'] ?></td>

                                        <td><?php echo $row['cantidad_pendiente'] ?></td>

                                        <td><?php echo date_format(date_create($row['hora']) , "Y/m/d H:i:s")  ?></td>

                                        <td><?php echo $row2['stock'] ?></td>

                                        <td><img class="img-responsive" src="<?php echo $row2['url'] ?>" width="100"></td>

                                        <td><?php echo strtoupper($row['responsable']); ?> # <?php echo $row['responsable_numero']; ?></td>

                                        <?php 
                                        if($row2['consumible'] == "si")
                                        {
                                        ?>
                                        <td>Consumible</td>
                                        <?php
                                        }
                                        else
                                        {
                                        
                                        ?>
                                        <td><a class="btn btn-warning btn-flat" href='index.php?page=tool_crib_mov&id=<?php echo $row['0'] ?>&movimiento_regresar=true'><i class="fa fa-refresh">&nbsp;&nbsp;</i>Regresar</a></td>
                                        <?php

                                        }
                                        ?>




                                        <?php 
                                        if($row2['consumible'] == "si")
                                        {
                                        ?>
                                        <td>Consumible</td>
                                        <?php
                                        }
                                        else
                                        {
                                        
                                        ?>
                                        <td><a class="btn btn-danger btn-flat" href='index.php?page=proveedores&id=<?php echo $row['id'] ?>' disabled><i class="fa fa-times">&nbsp;&nbsp;</i>Desechar</a></td>
                                        <?php

                                        }
                                        ?>
                                        


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