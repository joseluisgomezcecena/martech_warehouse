<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>

<?php 
//FUNCTIONS
altas();
movimiento();
altasEdit();
altasDelete();

//FORMS
if(isset($_GET['edit']) && $_GET['edit'] == "true")
{
    include "includes/forms/tool_crib/editar_tools.php";
}

if(isset($_GET['delete']) && $_GET['delete'] == "true")
{
    include "includes/forms/tool_crib/borrar_tools.php";
}

if(isset($_GET['mov']) && $_GET['mov'] == "true")
{
    include "includes/forms/tool_crib/movimiento.php";
}

//MODALS
if(isset($_GET['error']) && $_GET['error'] == "inventory")
{
    include "includes/forms/tool_crib/movimiento.php";
}




?>

<section class="content-header">
    <h1>
        Inventario.
        <small>TOOL CRIB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Tool Crib</li>
    </ol>
</section>



<section style="margin-top: 50px;" class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Opciones de tool crib.</h3>
                </div>
                <!-- /.box-header -->
                <div  class="box-body">


                <a href="index.php?page=tool_crib_crud">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-wrench"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Inventario</span>
                        <small style="font-size:11px; color:black;">Consulta el stock de herramientas asi como maximos y minimos.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>




                <a href="index.php?page=tool_crib_add_item">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-plus"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Altas</span>
                        <small style="font-size:11px; color:black;">Registra nuevas entradas en tool crib.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                <a href="index.php?page=tool_crib_mov">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-arrows-h"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Movimientos</span>
                        <small style="font-size:11px; color:black;">Consulta todos los movimientos de tool crib.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                <a href="index.php?page=">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div style="box-shadow: 0 0 3px grey" class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-cogs"></i></span>

                        <div class="info-box-content">
                        <span style="font-size:14px;" class="info-box-text">Consultar catalogo</span>
                        <small style="font-size:11px; color:black;">Consulta las herramientas de tool crib sin datos como maximos y minimos.</small>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                </a>

                
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>








<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Inventario</h3>
                </div>
               
                <div class="box-body">

                    <table style="width: 100%; font-size: 11px;" id="example2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Consumible</th>
                                <th># Parte</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Proveedor</th>
                                <th>Uso</th>
                                <th>Planta</th>
                                <th>Precio</th>
                                <th>Maximo</th>
                                <th>Minimo</th>
                                <th>Reorder QTY</th>
                                <th>Status</th>
                                <th>Stock</th>
                                <th>Stock Disponible</th>
                                <th>Image</th>
                                <th>Descontinuado</th>
                                <th>Movimientos</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                                <?php 
                                $query = "SELECT * FROM tool_herramienta WHERE status = 1 ORDER BY planta_id DESC";
                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($result)):
                                ?>

                                    <tr>
                                        <td><?php  if ($row['consumible'] == 0){echo "No";}else{echo "Si";} ?></td>

                                        <td><?php echo $row['numero_parte'] ?></td>
                                        
                                        <td><?php echo $row['descripcion'] ?></td>
                                        
                                        <td>
                                            <?php 
                                            $categoria_id =  $row['categoria_id'];
                                            $get_categoria = mysqli_query($connection,"SELECT * FROM tool_categorias WHERE id = $categoria_id;");
                                            $categoria_row = mysqli_fetch_array($get_categoria);
                                            echo $categoria_row['categoria']; 
                                            ?>
                                        </td>

                                        <td>
                                            <?php 
                                            $marca_id =  $row['marca_id'];
                                            $get_marca = mysqli_query($connection,"SELECT * FROM tool_marca WHERE id = $marca_id;");
                                            $marca_row = mysqli_fetch_array($get_marca);
                                            echo $marca_row['marca']; 
                                            ?>
                                        </td>
                                        
                                        <td>
                                            <?php 
                                            $proveedor_id =  $row['proveedor_id'];
                                            $get_proveedor = mysqli_query($connection,"SELECT * FROM tool_proveedores WHERE id = $proveedor_id;");
                                            $proveedor_row = mysqli_fetch_array($get_proveedor);
                                            echo $proveedor_row['proveedor']; 
                                            ?>
                                        </td>

                                        <td><?php echo $row['uso'] ?></td>

                                        <td>P:<?php echo $row['planta_id'] ?></td>

                                        <td>$ <?php echo number_format($row['precio_unitario'] ) ?></td>

                                        <td><?php echo number_format($row['maximo'])  ?></td>

                                        <td><?php echo number_format($row['minimo'])  ?></td>

                                        <td><?php echo number_format($row['reorder_qty'])  ?></td>

                                        <td>
                                        <?php
                                         if($row['reorder_qty']< $row['stock']){echo "OK";}else{echo "REORDER";}
                                        ?>
                                        </td>
                                        
                                        <td>
                                        <?php
                                        if($row['stock']<= $row['minimo'])
                                        {
                                            $style="style='color:red; font-weight:bolder'";
                                        }
                                        else
                                        {
                                            $style="style=''";
                                        } 
                                        echo "<p $style>".number_format($row['stock'])."</p>"; 
                                        ?>
                                        </td>



                                        <td>
                                            <?php
                                            echo number_format($row['stock_disponible']);
                                            ?>
                                        </td>





                                        <td>
                                        <?php 
                                        if($row['url'] == "")
                                        {
                                            echo "<img class='img-responsive' src='img/noimage.jpg' width='100'>";
                                        }
                                        else
                                        {
                                            echo "<img class='img-responsive' src='{$row["url"]}' width='100'>";
                                        } 
                                        ?>
                                        <!--
                                        <img class="img-responsive" src="<?php echo $row['url'] ?>" width="100">
                                        -->
                                        </td>

                                        <td><?php if($row['descontinuado']==1){echo "No";}else{echo"Si";}  ?></td>

                                        <td><a class="btn btn-primary btn-flat" href='index.php?page=tool_crib_inventario&mov=true&id=<?php echo $row['id'] ?>&cons=<?php echo $row['consumible'] ?>'><i class="fa  <?php if($row['consumible']== 1){echo"fa-arrow-down";}else{echo"fa-arrow-left";} ?>">&nbsp;&nbsp;</i><?php if($row['consumible']== 1){echo"Descontar";}else{echo"Mover";} ?></a></td>

                                        <td><a class="btn btn-default btn-flat" href='index.php?page=tool_crib_inventario&edit=true&id=<?php echo $row['id'] ?>'><i class="fa fa-edit"></i></a></td>
                                        
                                        <td><a class="btn btn-danger btn-flat" href='index.php?page=tool_crib_inventario&delete=true&id=<?php echo $row['id'] ?>'><i class="fa fa-times"></i></a></td>
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