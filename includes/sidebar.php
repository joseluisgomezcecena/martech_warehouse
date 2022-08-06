<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
               <img src="img/logo.png" class="img-circle" alt="Martech">
                <br/><br/><br/>
            </div>
            <div class="pull-left info">
                <p><?php echo $usuario  ?></p>

                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php 
                    echo $role;
                    ?>
                </a>
                
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Navegación</li>

            <li class="">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i> <span>Inicio</span>
                    
                    <span class="pull-right-container">
                    <i class=""></i>
                    </span>
                </a>
            </li>

            
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa fa-file"></i> <span>Entregas</span>
                    
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="index.php?page=entregas_form"><i class="fa fa-circle-o"></i> Entrega de materiales</a></li>
                    <li><a href="index.php?page=entregas_revision"><i class="fa fa-circle-o"></i> Revisión</a></li>
                    <li><a href="index.php?page=entregas_historico"><i class="fa fa-circle-o"></i> Historico</a></li>
                </ul>
            </li>


            <li class=" treeview">
                <a href="#">
                    <i class="fa fa fa-wrench"></i> <span>Tool Crib</span>
                    
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <!--
                    <li><a href="index.php?page=tool_crib_catalog"><i class="fa fa-circle-o"></i> Catalogo</a></li>
                    -->
                    <li><a href="index.php?page=tool_crib_inventario"><i class="fa fa-circle-o"></i> Inventario</a></li>
                    <li><a href="index.php?page=tool_crib_mov"><i class="fa fa-circle-o"></i> En Planta</a></li>
                    <li><a href="index.php?page=tool_crib_historico"><i class="fa fa-circle-o"></i> Historial de movimientos</a></li>
                    <li><a href="index.php?page=categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
                    <li><a href="index.php?page=marcas"><i class="fa fa-circle-o"></i> Marcas</a></li>
                    <li><a href="index.php?page=proveedores"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                    <li><a href="index.php?page=tool_lista"><i class="fa fa-circle-o"></i> Lista de Registros</a></li>
                </ul>
            </li>


            <li class=" treeview">
                <a href="#">
                    <i class="fa fa fa-arrow-left"></i> <span>One Work Order Flow</span>
                    
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Config</a></li>
                </ul>
            </li>

            
            
            <?php
            if($role == "Admin")
            {
                $usuario_menu = <<<DELIMITER
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i>
                    <span>Usuarios</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?page=usuario_nuevo"><i class="fa fa-circle-o"></i> Registrar usuario</a></li>
                    <li><a href="index.php?page=lista_usuarios"><i class="fa fa-circle-o"></i> Edición de usuarios</a></li>
                </ul>
            </li>
DELIMITER;
                echo $usuario_menu;
            }
            ?>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->



<div  class="content-wrapper">

