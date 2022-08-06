<?php
ob_start();

date_default_timezone_set("America/Tijuana");

//header('X-XSS-Protection:0');

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page ="";
}


if($page == "entregas_form" || $page == "entregas_historico" || $page == "entregas_historico_editar" || $page == "lista_usuarios" || $page == "tool_crib_crud" || $page == "program_list" )
{
    $datatablesop= 2;
}
else
{
    $datatablesop= 1;
}

//version minima de php
if (version_compare(PHP_VERSION, '5.3.7', '<'))
{
    exit(" :( Esta app no puede correr en una version de php menor a 5.3.7 ! contacte a mexicali paginas web");
}
else if (version_compare(PHP_VERSION, '5.5.0', '<'))
{
    require_once("libraries/password_compatibility_library.php");
}


?>