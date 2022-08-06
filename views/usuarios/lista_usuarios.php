<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>
<?php  
if($_SESSION['wh_isadmin'] == 0)
{
    die("No tienes permisos para entrar a esta sección.");
}
?>

<?php
if(isset($_GET['edited']))
{
    $email = $_GET['email'];
    $password = $_GET['password'];
    $nivel = $_GET['role'];
    if($nivel == 1){$user_role = "Administrador";}else{$user_role="Trabajador";}
    $modal = <<< DELIMITER
                     <!-- Modal -->
                                <div style="border-radius: 0" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                    <div style="border-radius:0" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="memberModalLabel">Usuario editado con exito.</h4>
                                            </div>
                                            <div style="border-radius: 0" class="modal-body">
                                                <p>El usuario fue editado con exito! con las siguientes credenciales. Guarde sus datos en un lugar seguro.</p>
                                                <p><b>Correo electronico:</b> {$email}</p>
                                                <p><b>Contraseña:</b> {$password}</p>
                                                <p><b>Nivel:</b> {$user_role}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button style="border-radius: 0" type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
DELIMITER;
    echo $modal;
}

if(isset($_GET['deleted']))
{
    $modal = <<< DELIMITER
                     <!-- Modal -->
                                <div style="border-radius: 0" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                    <div style="border-radius:0" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="memberModalLabel">Usuario eliminado con exito.</h4>
                                            </div>
                                            <div style="border-radius: 0" class="modal-body">
                                                <p>El usuario fue eliminado la información no podra ser recuperada</p>
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button style="border-radius: 0" type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
DELIMITER;
    echo $modal;
}
?>




<section class="content-header">
    <h1>
        Usuarios
        <small>Lista de usuarios</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Lista de usuarios</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios</h3>
                </div>
                <!-- /.box-header -->
                

                <div class="box-body">
                    <table style="width: 100%;" id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo electronico</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        
                        $usuario_actual = $_SESSION['wh_user_name'];
                        $query = mysqli_query($connection,"SELECT * FROM users WHERE user_name != '$usuario_actual' AND user_name != 'joseluisgomezcecegna'") ;
                        while($row = mysqli_fetch_array($query)):    
                        ?>

                            <tr>
                                <td><?php  echo $row['user_name'] ?></td>
                                <td><?php echo $row['user_email'] ?></td>
                                <td><a href="index.php?page=usuario_editar&id=<?php  echo $row['user_id'] ?>" class="btn btn-default">Editar</a></td>
                                <td><a href="index.php?page=usuario_borrar&id=<?php echo $row['user_id'] ?>" class="btn btn-danger">Eliminar</a></td>
                            </tr>

                        <?php 
                        endwhile;
                        ?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo electronico</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box -->
        </div>
    </div>
</section>