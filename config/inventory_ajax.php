<?php
session_start();
include 'db.php';
//include 'ajax_session.php';
 
if($_GET['isadmin'] == 1)
{
  $display = "";
  $class = "";
}
else
{
  $display = "display:none;";
  $class = "disabled";
}
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
 
## Search 
$searchQuery = " ";
if($searchValue != ''){
        $searchQuery = " and (numero_parte like '%".$searchValue."%' or 
        locacion like '%".$searchValue."%' or planta_id like '%".$searchValue."%' or descripcion like '%".$searchValue."%') ";
}
 
## Total number of records without filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tool_herramienta WHERE status = 1 ORDER BY planta_id ASC");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];
 
## Total number of record with filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tool_herramienta WHERE status = 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];
 
## Fetch records
$empQuery = "select * from tool_herramienta WHERE status =  1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($connection, $empQuery);
$data = array();
 
while ($row = mysqli_fetch_assoc($empRecords)) {
 
    ##other querys
    $descripcion = htmlspecialchars($row['descripcion']);
    ##other querys
 
   $data[] = array( 
    "planta_id"=>$row['planta_id'],
    "consumible"=>$row['consumible'],
    "locacion" =>$row['locacion'],  
    "numero_parte"=>$row['numero_parte'],
    "numero_parte_proveedor"=>$row['numero_parte_proveedor'],
    "descripcion"=>$descripcion,
    "main_cat_id"=>$row['main_cat_id'],
    "categoria_id"=>$row['categoria_id'],
    "marca_id"=>$row['marca_id'],
    "proveedor_id"=>$row['proveedor_id'],
    "uso"=>$row['uso'],
    "maximo"=>$row['maximo'],
    "minimo"=>$row['minimo'],
    "reorder_qty"=>$row['reorder_qty'],
    "stock"=>$row['stock'],
    "stock_disponible"=>$row['stock_disponible'],
    "url"=>"<img class='img-responsive' src='{$row['url']}'>",
    "mover_btn"=>"<a class='btn btn-primary' href='index.php?page=tool_crib_inventario&mov=true&id={$row['id']}'>Mover</a>",
    "editar_btn"=>"<a style='' class='btn btn-default $class' href='index.php?page=tool_crib_inventario&edit=true&id={$row['id']}' $class>Editar</a>",
    "borrar_btn"=>"<a style='' class='btn btn-danger $class disabled' href='index.php?page=tool_crib_inventario&delete=true&id={$row['id']}' $class>Eliminar</a>"
   );
}
 
## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);
 
echo json_encode($response);
