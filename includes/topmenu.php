<?php 
//SESION DE USUARIO
$usuario = $_SESSION['wh_user_name']
?>

<body class="hold-transition skin-green fixed  sidebar-mini">
<div class="wrapper">

    <header class="main-header "><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>MW</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Martech</b>Warehouse</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                   <!--
                    <li class="dropdown tasks-menu">
                        <a id="misalertas" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                                                        
                            <span class="label ">3</span>
                        </a>
                        <ul id="misalertas-detalles" class="dropdown-menu">

                            

                            <li class="header"><?php # echo $numero_encontrado ?> Alertas</li>
                            <li>
                                <!-- inner menu: contains the actual data 
                                <ul class="menu">

                                   
                                    <li><!-- Task item 
                                        <a style="font-size:10px; color:#3c8dbc" href="index.php?page=error_atender&id=">
                                            <h3>
                                                <small class="pull-right"></small>
                                            </h3>
                                            
                                        </a>
                                    </li>
                                   
                                    
                                    <!-- end task item 
                               </ul>
                            </li>
                            <li class="footer">
                                <a href="index.php?page=atender_list">Ver Todo</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <?php
                    
                    if($rol == 1)
                    {
                        $role = "Admin";
                    }
                    else
                    {
                        $role = "User";
                    }
                    ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/logo.png" class="user-image" alt="Usuario" width="160" height="160">
                            <span class="hidden-xs"> &nbsp;&nbsp; <?php echo $usuario ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                               <img src="img/logo.png" class="img-circle" alt="Usuario">

                                <p>
                                    <?php echo $usuario ?> - <?php echo $role ?>
                                    
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">

                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="index.php">Inicio</a>
                                    </div>
                                    <div class="col-xs-4 text-center">

                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="index.php?page=editar_perfil" class="btn btn-default btn-flat">Mi perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="index.php?logout" class="btn btn-default btn-flat">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>