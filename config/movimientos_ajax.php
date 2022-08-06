<?php
session_start();
include 'db.php';


## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
//$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnName = "tool_movimientos.id";
//$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$columnSortOrder = "desc";
$searchValue = $_POST['search']['value']; // Search value
 
## Search 
$searchQuery = " ";
if($searchValue != ''){
        $searchQuery = " and (tool_movimientos.planta_id like '%".$searchValue."%' or 
        tool_herramienta.descripcion like '%".$searchValue."%' or tool_movimientos.movimiento_de like '%".$searchValue."%'   
        or tool_herramienta.numero_parte like '%".$searchValue."%' or tool_herramienta.descripcion like '%".$searchValue."%' ) ";
}
 
## Total number of records without filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0 ORDER BY tool_movimientos.id DESC");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];


## Total number of record with filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0 " .$searchQuery . " ORDER BY tool_movimientos.id DESC");
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];
 
## Fetch records
$empQuery = "select * from tool_movimientos LEFT JOIN tool_herramienta ON tool_movimientos.herramienta_id = tool_herramienta.id WHERE tipo = 's' AND cantidad_pendiente > 0 AND consumible = 0  ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($connection, $empQuery);
$data = array();


while ($row = mysqli_fetch_array($empRecords)) {
 
    ##other querys
    $descripcion = htmlspecialchars($row['descripcion']);
    $hora = date_format(date_create($row['hora']) , "Y/m/d H:i:s");
    $consumible = $row['consumible'];
    if($consumible == 'si')
    {
      $btn_regresar = "Consumible";
      $btn_deshechar = "Consumible";
    }
    else
    {
      $btn_regresar = "<a style='' class='btn btn-warning' href='index.php?page=tool_crib_mov&id={$row[0]}&movimiento_regresar=true' ><i class='fa fa-refresh'>&nbsp;&nbsp;</i>Regresar</a>";
      $btn_deshechar = "<a style='' class='btn btn-danger' href='#' ><i class='fa fa-times'>&nbsp;&nbsp;</i>Deshechar</a>";
    }
    ##other querys
 
   $data[] = array(
    "numero_parte"=>$row['numero_parte'],
    "descripcion"=>$descripcion,
    "categoria_id"=>$row['categoria_id'],
    "marca_id"=>$row['marca_id'],
    "proveedor_id"=>$row['proveedor_id'],
    "uso"=>$row['uso'],
    "planta_id" =>$row['planta_id'],
    "origen"=>$row['movimiento_de'],
    "destino"=>$row['movimiento_a'],
    "cantidad"=>$row['cantidad'],
    "cantidad_pendiente"=>$row['cantidad_pendiente'],
    "hora"=>$hora,
    "stock"=>$row['stock'],
    "url"=>"<img class='img-responsive' src='{$row['url']}'>",
    "responsable"=>$row['responsable'] . "<br> " . $row['responsable_numero'],
    "regresar_btn"=>$btn_regresar,
    "deshechar_btn"=>$btn_deshechar
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
