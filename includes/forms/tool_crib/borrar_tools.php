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
        <div style="border-radius:0; " class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:red; color:white" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Eliminar <?php echo $row['numero_parte']." ".$row['descripcion']?></h4>
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
                                    
                                        <div class="form-group col-lg-6">
                                            <label>Numero de parte</label>
                                            <input name="numero_parte" class="form-control" value="<?php echo $row['numero_parte'] ?>" disabled>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Descripción</label>
                                            <input name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>" disabled>
                                        </div>
                                        

                                        <div class="form-group col-lg-12">
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
                    
                    <input  type="submit" name="delete_alta" class="btn btn-danger btn-flat" value="Eliminar">

                    <button  type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</form>
