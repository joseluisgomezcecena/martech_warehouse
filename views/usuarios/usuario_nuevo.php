<?php require_once ("includes/topmenu.php")?>
<?php require_once ("includes/sidebar.php")?>


<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            //echo $error;
            $modal = <<< DELIMITER
                     <!-- Modal -->
                                <div style="border-radius: 0" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                    <div style="border-radius:0" class="modal-dialog">
                                        <div class="modal-content">
                                            <div style="background-color: #f23c14; color: white;" class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="memberModalLabel">Mensaje de mpw.</h4>
                                            </div>
                                            <div style="border-radius: 0" class="modal-body">
                                                <p>{$error}</p>
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
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            //echo $message;
            $modal = <<< DELIMITER
                     <!-- Modal -->
                                <div style="border-radius: 0" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                    <div style="border-radius:0" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="memberModalLabel">Mensaje de cms.</h4>
                                            </div>
                                            <div style="border-radius: 0" class="modal-body">
                                                <p>{$message}</p>
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
    }
}
?>


<section class="content-header">
    <h1>
        Usuarios
        <small>Alta de usuarios</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Alta de usuarios</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos de usuario</h3>
                </div>
                <!-- /.box-header -->


                <!-- form start ../para entrar al archivo register.php por que estamos en views/usuarios/ -->
                <form role="form" method="post" action="register.php" name="registerform">
                    <div class="box-body">




                        <div class="form-group col-lg-6">
                            <!-- the user name input field uses a HTML5 pattern check -->
                            <label for="login_input_username">Usuario (Solo letras y numeros)</label>
                            <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                        </div>

                        <div class="form-group col-lg-6">
                            <!-- the email input field uses a HTML5 email type check -->
                            <label for="login_input_email">Correo electronico</label>
                            <input id="login_input_email" class="login_input form-control" type="email" name="user_email" required />
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="login_input_password_new">Contraseña ( min 6 )</label>
                            <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="login_input_password_repeat">Repetir contraseña</label>
                            <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                        </div>

                    


                       

                        <div class="form-group col-lg-4">
                            <!-- the user name input field uses a HTML5 pattern check -->
                            <label for="login_input_username">Nombre(s)</label>
                            <input id="login_input_username" class="login_input form-control" type="text"  name="nombre" required />
                        </div>


                        <div class="form-group col-lg-4">
                            <!-- the user name input field uses a HTML5 pattern check -->
                            <label for="login_input_username">Apellido(s)</label>
                            <input id="login_input_username" class="login_input form-control" type="text"  name="apellido" required />
                        </div>

                        <div class="form-group col-lg-4">
                            <label id="edit_actuals_programa">Acceso de administrador</label>
                            <select class="form-control" name="isadmin" required>
                                <option value="">Select</option>
                                <option  value="0">No</option>
                                <option  value="1">Si</option>
                            </select>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="form-group col-lg-12">
                            <input type="submit" class="btn btn-primary" name="register" value="Registrar usuario" />
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>