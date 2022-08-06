<?php


define("DB_HOST", "localhost");
define("DB_NAME", "warehouse_app");
define("DB_USER", "root");
define("DB_PASS", "");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$connection)
{
    die("Error de conexion con base de datos.");
}

require_once ("functions.php");
require_once ("functions_users_account.php");



