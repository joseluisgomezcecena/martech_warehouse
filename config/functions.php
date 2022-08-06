<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

error_reporting(E_ALL);


function saveMemo()
{
    global $connection;

    if(isset($_POST['agregar_entrega']))
    {
        $para              =  mysqli_real_escape_string($connection,$_POST['para']);
        $de                =  mysqli_real_escape_string($connection,$_POST['de']);
        $asunto            =  mysqli_real_escape_string($connection,$_POST['asunto']);
        $fecha             =  mysqli_real_escape_string($connection,$_POST['fecha']);


        $cert              =  mysqli_real_escape_string($connection,$_POST['cert']);
        $num_parte_martech =  mysqli_real_escape_string($connection,$_POST['num_part_martech']);
        $lote              =  mysqli_real_escape_string($connection,$_POST['lote']);
        $descripcion       =  mysqli_real_escape_string($connection,$_POST['cert']);
        $cantidad          =  mysqli_real_escape_string($connection,$_POST['cantidad']);
        $udm               =  mysqli_real_escape_string($connection,$_POST['udm']);
        $recibio           =  mysqli_real_escape_string($connection,$_POST['recibio']);
        $vendedor          =  mysqli_real_escape_string($connection,$_POST['vendedor']);
        $comprador         =  mysqli_real_escape_string($connection,$_POST['comprador']);
        $orden_compra      =  mysqli_real_escape_string($connection,$_POST['orden_compra']);
        $ubicacion         =  mysqli_real_escape_string($connection,$_POST['ubicacion']);
        $sesion            =  "usuario";

        $exists = 0;

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $exists = 1;
        }

        if($exists == 1)
        {
                //no es el primero
                $materials_sql = "INSERT INTO memo_entrega_material_lis (id_memo, cert, num_part_martech, 
                lote, cantidad, udm, recibio, vendedor, comprador, orden_compra, ubicacion, descripcion, sesion )
                 VALUES ($id, '$cert', '$num_parte_martech', '$lote', '$cantidad', '$udm', '$recibio', '$vendedor', 
                 '$comprador', '$orden_compra', '$ubicacion', '$descripcion', '$sesion')";

                 $run_materials_sql = mysqli_query($connection, $materials_sql);

                 if($run_materials_sql)
                 {
                     header("Location: index.php?page=entregas_form&id=$id");
                 }
        }
        else
        {
            //nuevo
            $query = "INSERT INTO memo_entrega_material (para, de, asunto, fecha) VALUES ('$para', '$de', '$asunto', '$fecha' )";
            $result = mysqli_query($connection, $query);
            if($result)
            {
                
                $memo_id = mysqli_insert_id($connection);

                $materials_sql = "INSERT INTO memo_entrega_material_lis (id_memo, cert, num_part_martech, 
                lote, cantidad, udm, recibio, vendedor, comprador, orden_compra, ubicacion, descripcion, sesion )
                 VALUES ($memo_id, '$cert', '$num_parte_martech', '$lote', '$cantidad', '$udm', '$recibio', '$vendedor', 
                 '$comprador', '$orden_compra', '$ubicacion', '$descripcion', '$sesion')";

                 $run_materials_sql = mysqli_query($connection, $materials_sql);

                 if($run_materials_sql)
                 {
                     header("Location: index.php?page=entregas_form&id=$memo_id");
                 }
    
            }
            else
            {
                echo $query;
            }
        }
       
    }
}




function saveMemoEdit()
{
    global $connection;

    if(isset($_POST['agregar_entrega']))
    {
        $para              =  mysqli_real_escape_string($connection,$_POST['para']);
        $de                =  mysqli_real_escape_string($connection,$_POST['de']);
        $asunto            =  mysqli_real_escape_string($connection,$_POST['asunto']);
        $fecha             =  mysqli_real_escape_string($connection,$_POST['fecha']);


        $cert              =  mysqli_real_escape_string($connection,$_POST['cert']);
        $num_parte_martech =  mysqli_real_escape_string($connection,$_POST['num_part_martech']);
        $lote              =  mysqli_real_escape_string($connection,$_POST['lote']);
        $descripcion       =  mysqli_real_escape_string($connection,$_POST['cert']);
        $cantidad          =  mysqli_real_escape_string($connection,$_POST['cantidad']);
        $udm               =  mysqli_real_escape_string($connection,$_POST['udm']);
        $recibio           =  mysqli_real_escape_string($connection,$_POST['recibio']);
        $vendedor          =  mysqli_real_escape_string($connection,$_POST['vendedor']);
        $comprador         =  mysqli_real_escape_string($connection,$_POST['comprador']);
        $orden_compra      =  mysqli_real_escape_string($connection,$_POST['orden_compra']);
        $ubicacion         =  mysqli_real_escape_string($connection,$_POST['ubicacion']);
        $sesion            =  "usuario";

        $exists = 0;

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $exists = 1;
        }

        if($exists == 1)
        {
                //no es el primero
                $materials_sql = "INSERT INTO memo_entrega_material_lis (id_memo, cert, num_part_martech, 
                lote, cantidad, udm, recibio, vendedor, comprador, orden_compra, ubicacion, descripcion, sesion )
                 VALUES ($id, '$cert', '$num_parte_martech', '$lote', '$cantidad', '$udm', '$recibio', '$vendedor', 
                 '$comprador', '$orden_compra', '$ubicacion', '$descripcion', '$sesion')";

                 $run_materials_sql = mysqli_query($connection, $materials_sql);

                 if($run_materials_sql)
                 {
                     header("Location: index.php?page=entregas_historico_editar&id=$id");
                 }
        }
        else
        {
            //nuevo
            $query = "INSERT INTO memo_entrega_material (para, de, asunto, fecha) VALUES ('$para', '$de', '$asunto', '$fecha' )";
            $result = mysqli_query($connection, $query);
            if($result)
            {
                
                $memo_id = mysqli_insert_id($connection);

                $materials_sql = "INSERT INTO memo_entrega_material_lis (id_memo, cert, num_part_martech, 
                lote, cantidad, udm, recibio, vendedor, comprador, orden_compra, ubicacion, descripcion, sesion )
                 VALUES ($memo_id, '$cert', '$num_parte_martech', '$lote', '$cantidad', '$udm', '$recibio', '$vendedor', 
                 '$comprador', '$orden_compra', '$ubicacion', '$descripcion', '$sesion')";

                 $run_materials_sql = mysqli_query($connection, $materials_sql);

                 if($run_materials_sql)
                 {
                     header("Location: index.php?page=entregas_historico_editar&id=$memo_id");
                 }
    
            }
            else
            {
                echo $query;
            }
        }
       
    }
}






function editMemo()
{
    global $connection;

    if(isset($_POST['editar_entrega']))
    {
        $id                = $_GET['id'];

        $para              =  mysqli_real_escape_string($connection,$_POST['para']);
        $de                =  mysqli_real_escape_string($connection,$_POST['de']);
        $asunto            =  mysqli_real_escape_string($connection,$_POST['asunto']);
        $fecha             =  mysqli_real_escape_string($connection,$_POST['fecha']);

        $query = "UPDATE memo_entrega_material SET para = '$para', de = '$de', asunto = '$asunto', fecha = '$fecha' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if($result)
        {
            header("Location: index.php?page=entregas_historico_editar&id=$id");
        }
        else
        {
            header("Location: index.php?page=entregas_historico_editar&id=$id&error=true");
        }

    }
}



function finishMemo()
{
    global $connection;

    if(isset($_POST['terminar_entrega']))
    {
        $id = $_GET['id'];
        
        $query  =  "UPDATE memo_entrega_material SET terminado = 1 WHERE id = $id";
        
        $result = mysqli_query($connection, $query);
        
        if($result)
        {
            header("Location: index.php?page=entregas_view_print&id=$id");
        }
    }
}


function saveRevision()
{
    global $connection;

    if(isset($_POST['save_revision']))
    {
        $revision       = mysqli_real_escape_string($connection,$_POST['revision']);
        $fecha          = mysqli_real_escape_string($connection,$_POST['fecha']);
        echo $hoy       = date("Y-m-d");
        

        $select = "SELECT * FROM revision WHERE actual = 1 ORDER BY id DESC";
        $run = mysqli_query($connection, $select);
        $row = mysqli_fetch_array($run);

        $id = $row['id'];

        $update = "UPDATE revision SET actual = 0, hasta='$hoy' WHERE id = $id";
        $run_update = mysqli_query($connection, $update);
        
        $query  =  "INSERT INTO revision (revision, tipo_archivo, actual, desde, hasta) VALUES ('$revision', 'entrega recvqc', 1, '$fecha', '0000-00-00')";
        
        $result = mysqli_query($connection, $query);
        
        if($result)
        {
            header("Location: index.php?page=entregas_revision&add=true");
        }
        else
        {
            header("Location: index.php?page=entregas_revision&add=false");
        }
    }
}





function deleteItem()
{
    global $connection;

    if(isset($_POST['delete_memo_item']))
    {
        $id = $_GET['id'];
        $item = $_GET['item'];
        
        $query = "DELETE FROM memo_entrega_material_lis WHERE id = $item";
        $result = mysqli_query($connection, $query);
        if($result)
        {
            header("Location: index.php?page=entregas_historico_editar&id=$id");
        }
        else
        {
            echo $query;
            header("Location: index.php?page=entregas_historico_editar&id=$id&error=true");
        }
    }
}




function editItem()
{
    global $connection;

    if(isset($_POST['edit_memo_item']))
    {
        $id   = $_GET['id'];
        $item = $_GET['item'];


        $cert              =  mysqli_real_escape_string($connection,$_POST['cert']);
        $num_parte_martech =  mysqli_real_escape_string($connection,$_POST['num_part_martech']);
        $lote              =  mysqli_real_escape_string($connection,$_POST['lote']);
        $descripcion       =  mysqli_real_escape_string($connection,$_POST['cert']);
        $cantidad          =  mysqli_real_escape_string($connection,$_POST['cantidad']);
        $udm               =  mysqli_real_escape_string($connection,$_POST['udm']);
        $recibio           =  mysqli_real_escape_string($connection,$_POST['recibio']);
        $vendedor          =  mysqli_real_escape_string($connection,$_POST['vendedor']);
        $comprador         =  mysqli_real_escape_string($connection,$_POST['comprador']);
        $orden_compra      =  mysqli_real_escape_string($connection,$_POST['orden_compra']);
        $ubicacion         =  mysqli_real_escape_string($connection,$_POST['ubicacion']);
        $sesion            =  "usuario";



        
        $query = "UPDATE memo_entrega_material_lis SET cert = '$cert', num_part_martech = '$num_parte_martech', lote = '$lote', descripcion = '$descripcion',  
        cantidad = '$cantidad', udm = '$udm', recibio = '$recibio', vendedor = '$vendedor', comprador = '$comprador', orden_compra = '$orden_compra', ubicacion = '$ubicacion',  
        sesion = '$sesion' WHERE id = $item";
        
        $result = mysqli_query($connection, $query);
        if($result)
        {
            header("Location: index.php?page=entregas_historico_editar&id=$id");
        }
        else
        {
            echo $query;
            //header("Location: index.php?page=entregas_historico_editar&id=$id&error=true");
        }
    }
}


/**************************************************toolcrib */











function saveProveedor()
{
    global $connection;

    if(isset($_POST['save_proveedor']))
    {
        $proveedor       = mysqli_real_escape_string($connection,$_POST['proveedor']);
        $telefono1       = mysqli_real_escape_string($connection,$_POST['telefono1']);
        $telefono2       = mysqli_real_escape_string($connection,$_POST['telefono2']);
        $email           = mysqli_real_escape_string($connection,$_POST['email']);
        $direccion       = mysqli_real_escape_string($connection,$_POST['direccion']);
        $contacto        = mysqli_real_escape_string($connection,$_POST['contacto']);
        $fecha           = date("Y-m-d");
        

        $select = "SELECT * FROM tool_proveedores WHERE proveedor = '$proveedor'";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "INSERT INTO tool_proveedores (proveedor, telefono1, telefono2, email, direccion, contacto, fecha) 
            VALUES ('$proveedor', '$telefono1', '$telefono2', '$email', '$direccion', '$contacto', '$fecha');";

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=proveedores&error=false");
            }
            else
            {
                header("Location: index.php?page=proveedores&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=proveedores&error=repeated");
        }
    }
}


function editProveedor()
{
    global $connection;

    if(isset($_POST['edit_proveedor']))
    {

        $id              = $_GET['id'];

        $proveedor       = mysqli_real_escape_string($connection,$_POST['proveedor']);
        $telefono1       = mysqli_real_escape_string($connection,$_POST['telefono1']);
        $telefono2       = mysqli_real_escape_string($connection,$_POST['telefono2']);
        $email           = mysqli_real_escape_string($connection,$_POST['email']);
        $direccion       = mysqli_real_escape_string($connection,$_POST['direccion']);
        $contacto        = mysqli_real_escape_string($connection,$_POST['contacto']);
        $fecha           = date("Y-m-d");
        

        $select = "SELECT * FROM tool_proveedores WHERE proveedor = '$proveedor' AND id != $id";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "UPDATE tool_proveedores SET proveedor = '$proveedor', telefono1 = '$telefono1', telefono2 = '$telefono2', email = '$email',
              direccion = '$direccion', contacto = '$contacto', fecha = '$fecha' WHERE id = $id"; 
            

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=proveedores&error=false");
            }
            else
            {
                header("Location: index.php?page=proveedores&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=proveedores&error=repeated");
        }
    }
}



function deleteProveedor()
{
    global $connection;

    if(isset($_POST['delete_proveedor']))
    {

        $id  = $_GET['id'];
        
        $query = "DELETE FROM tool_proveedores  WHERE id = $id"; 
            
        $result = mysqli_query($connection, $query);

        if($result)
        {
            header("Location: index.php?page=proveedores&error=false");
        }
        else
        {
            header("Location: index.php?page=proveedores&error=insert");    
        }
        
    }
}





function saveCategoria()
{
    global $connection;

    if(isset($_POST['save_categoria']))
    {
        $categoria       = mysqli_real_escape_string($connection,$_POST['categoria']);
        

        $select = "SELECT * FROM tool_categorias WHERE categoria = '$categoria';";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "INSERT INTO tool_categorias (categoria) VALUES ('$categoria');";

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=categorias&error=false");
            }
            else
            {
                header("Location: index.php?page=categorias&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=categorias&error=repeated");
        }
    }
}



function editCategoria()
{
    global $connection;

    if(isset($_POST['edit_categoria']))
    {
        $id              = $_GET['id'];
        $categoria       = mysqli_real_escape_string($connection,$_POST['categoria']);
        

        $select = "SELECT * FROM tool_categorias WHERE categoria = '$categoria' AND id != $id;";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "UPDATE tool_categorias SET categoria = '$categoria' WHERE id = $id;";

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=categorias&error=false");
            }
            else
            {
                header("Location: index.php?page=categorias&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=categorias&error=repeated");
        }
    }
}


function deleteCategoria()
{
    global $connection;

    if(isset($_POST['delete_categoria']))
    {
        $id              = $_GET['id'];
        $categoria       = mysqli_real_escape_string($connection,$_POST['categoria']);
        

       
        $query = "DELETE FROM tool_categorias WHERE id = $id;";

        $result = mysqli_query($connection, $query);

        if($result)
        {
            header("Location: index.php?page=categorias&error=false");
        }
        else
        {
            header("Location: index.php?page=categorias&error=insert");    
        }
        
    }
}



function saveMarca()
{
    global $connection;

    if(isset($_POST['save_marca']))
    {
        $marca       = mysqli_real_escape_string($connection,$_POST['marca']);
        

        $select = "SELECT * FROM tool_marca WHERE marca = '$marca';";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "INSERT INTO tool_marca (marca) VALUES ('$marca');";

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=marcas&error=false");
            }
            else
            {
                header("Location: index.php?page=marcas&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=marcas&error=repeated");
        }
    }
}



function editMarca()
{
    global $connection;

    if(isset($_POST['edit_marca']))
    {
        $id          = $_GET['id'];
        $marca       = mysqli_real_escape_string($connection,$_POST['marca']);
        

        $select = "SELECT * FROM tool_marca WHERE marca = '$marca' AND id != $id;";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            $query = "UPDATE tool_marca SET marca = '$marca' WHERE id = $id;";

            $result = mysqli_query($connection, $query);

            if($result)
            {
                header("Location: index.php?page=marcas&error=false");
            }
            else
            {
                header("Location: index.php?page=marcas&error=insert");    
            }
        }
        else
        {
            header("Location: index.php?page=marcas&error=repeated");
        }
    }
}


function deleteMarca()
{
    global $connection;

    if(isset($_POST['delete_marca']))
    {
        $id          = $_GET['id'];

        
        $query = "DELETE FROM tool_marca  WHERE id = $id;";

        $result = mysqli_query($connection, $query);

        if($result)
        {
            header("Location: index.php?page=marcas&error=false");
        }
        else
        {
            header("Location: index.php?page=marcas&error=insert");    
        }
    }
}





function altas()
{
    global $connection;

    if(isset($_POST['save_alta']))
    {


        /***********archivo */



        $target_dir = "uploads/";
        $target_file = $target_dir .rand().basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
        {
            $uploadOk = 1;
        } 
        else 
        {
            //echo "No hay imagen.";
            $target_file = "uploads/img/noimage.jpg";

        }
        
        // repetido
        if (file_exists($target_file)) 
        {
            echo "Ya existe.";
            $uploadOk = 0;
        }
        // peso
        if ($_FILES["fileToUpload"]["size"] > 5000000) 
        {
            echo "Solo archivos menores a 5Mb.";
            $uploadOk = 0;
        }

        // formatos
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "PNG" && $imageFileType != "png" 
        && $imageFileType != "jpeg" && $imageFileType != "GIF" && $imageFileType != "gif" ) 
        {
            echo "Solo JPG, JPEG, PNG & GIF.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            //echo "El archivo fue cargado.";
        // todo salio bien subir el archivo
        } 
        else 
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
            {
                echo "El archivo:  ". basename( $_FILES["fileToUpload"]["name"]). " fue cargado.";
            } 
            else 
            {
                echo "Hubo un error al subir el archivo.";
            }
        }





        /************archivo */

        $consumible                 = mysqli_real_escape_string($connection,$_POST['consumible']);
        $numero_parte               = mysqli_real_escape_string($connection,$_POST['numero_parte']);
        $numero_parte_proveedor     = mysqli_real_escape_string($connection,$_POST['numero_parte_proveedor']);
        $descripcion                = mysqli_real_escape_string($connection,$_POST['descripcion']);
        $main_cat_id                = mysqli_real_escape_string($connection,$_POST['main_cat_id']);
        $categoria_id               = mysqli_real_escape_string($connection,$_POST['categoria_id']);
        $marca_id                   = mysqli_real_escape_string($connection,$_POST['marca_id']);
        $proveedor_id               = mysqli_real_escape_string($connection,$_POST['proveedor_id']);
        $uso                        = mysqli_real_escape_string($connection,$_POST['uso']);
        $planta_id                  = mysqli_real_escape_string($connection,$_POST['planta_id']);
        $precio_unitario            = mysqli_real_escape_string($connection,$_POST['precio_unitario']);
        $maximo                     = mysqli_real_escape_string($connection,$_POST['maximo']);
        $minimo                     = mysqli_real_escape_string($connection,$_POST['minimo']);
        $reorder_qty                = mysqli_real_escape_string($connection,$_POST['reorder_qty']);
        $stock                      = mysqli_real_escape_string($connection,$_POST['stock']);
        $descontinuado              = mysqli_real_escape_string($connection,$_POST['descontinuado']);
        $locacion                   = mysqli_real_escape_string($connection,$_POST['locacion']);
        $entregado                  = mysqli_real_escape_string($connection,$_POST['entregado']);
        $entregado_numero           = mysqli_real_escape_string($connection,$_POST['entregado_numero']);
        $entrego  = $entregado."-".$entregado_numero;
        
        if($minimo >= $maximo)
        {
            echo '
            <div style="opacity: .5;" class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> El campo de minimo no puede ser mayor o igual que el campo de maximo.
            </div>
            ';            
        }
        else
        {

            $select = "SELECT * FROM tool_herramienta WHERE numero_parte = '$numero_parte';";
            $run = mysqli_query($connection, $select);
            if(mysqli_num_rows($run)==0)
            {
                $query = "INSERT INTO tool_herramienta 
                (consumible, numero_parte, numero_parte_proveedor,
                descripcion, categoria_id, marca_id, proveedor_id, uso, planta_id, precio_unitario, maximo, 
                minimo, reorder_qty, stock, descontinuado, url, stock_disponible, main_cat_id, locacion)
                VALUES 
                ('$consumible', '$numero_parte', '$numero_parte_proveedor' ,'$descripcion', '$categoria_id',
                '$marca_id', '$proveedor_id', '$uso', '$planta_id', '$precio_unitario', '$maximo',
                '$minimo', '$reorder_qty', '$stock', '$descontinuado', '$target_file', '$stock',
                '$main_cat_id', '$locacion');";

                $result = mysqli_query($connection, $query);

                if($result)
                {

                    $tool_id = mysqli_insert_id($connection);

                    $query2 = "INSERT INTO tool_altas 
                    (tool_id, consumible, numero_parte, numero_parte_proveedor,
                    descripcion, main_cat_id, categoria_id, marca_id, proveedor_id, uso, planta_id, precio_unitario,
                    stock, url, entrego)
                    VALUES 
                    ('$tool_id', '$consumible', '$numero_parte', '$numero_parte_proveedor' ,'$descripcion', '$main_cat_id','$categoria_id',
                    '$marca_id', '$proveedor_id', '$uso', '$planta_id', '$precio_unitario', '$stock', '$target_file', '$entrego' );";

                    $run2 = mysqli_query($connection, $query2);


                    header("Location: index.php?page=tool_crib_inventario&error=false");
                }
                else
                {
                    echo $query;
                    
                }
            }
            else
            {
                echo '
                <div style="opacity: .5;" class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> Este numero de parte ya esta registrado.
                </div>
                ';    
            }
        }
    }
}








/*
function altasEdit()
{
    global $connection;

    if(isset($_POST['edit_alta']))
    {





        $target_dir = "uploads/";
        $target_file = $target_dir .rand().basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
        {
            $uploadOk = 1;
            $q = 1;
        } 
        else 
        {
            $q = 2;

        }
        
        // repetido
        if (file_exists($target_file)) 
        {
            echo "Ya existe.";
            $uploadOk = 0;
        }
        // peso
        if ($_FILES["fileToUpload"]["size"] > 5000000) 
        {
            echo "Solo archivos menores a 5Mb.";
            $uploadOk = 0;
        }

        // formatos
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "PNG" && $imageFileType != "png" 
        && $imageFileType != "jpeg" && $imageFileType != "GIF" && $imageFileType != "gif" ) 
        {
            echo "Solo JPG, JPEG, PNG & GIF.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            //echo "El archivo fue cargado.";
        // todo salio bien subir el archivo
        } 
        else 
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
            {
                echo "El archivo:  ". basename( $_FILES["fileToUpload"]["name"]). " fue cargado.";
            } 
            else 
            {
                echo "Hubo un error al subir el archivo.";
            }
        }






        $id                         = $_GET['id'];
        $consumible                 = mysqli_real_escape_string($connection,$_POST['consumible']);
        $numero_parte               = mysqli_real_escape_string($connection,$_POST['numero_parte']);
        $numero_parte_proveedor     = mysqli_real_escape_string($connection,$_POST['numero_parte_proveedor']);
        $descripcion                = mysqli_real_escape_string($connection,$_POST['descripcion']);
        $categoria_id               = mysqli_real_escape_string($connection,$_POST['categoria_id']);
        $marca_id                   = mysqli_real_escape_string($connection,$_POST['marca_id']);
        $proveedor_id               = mysqli_real_escape_string($connection,$_POST['proveedor_id']);
        $uso                        = mysqli_real_escape_string($connection,$_POST['uso']);
        $planta_id                  = mysqli_real_escape_string($connection,$_POST['planta_id']);
        $precio_unitario            = mysqli_real_escape_string($connection,$_POST['precio_unitario']);
        $maximo                     = mysqli_real_escape_string($connection,$_POST['maximo']);
        $minimo                     = mysqli_real_escape_string($connection,$_POST['minimo']);
        $reorder_qty                = mysqli_real_escape_string($connection,$_POST['reorder_qty']);
        $main_cat_id                = mysqli_real_escape_string($connection,$_POST['main_cat_id']);
        $stock                      = mysqli_real_escape_string($connection,$_POST['stock']);
        $descontinuado              = mysqli_real_escape_string($connection,$_POST['descontinuado']);
        $locacion                   = mysqli_real_escape_string($connection,$_POST['locacion']);
        $stock_disponible           = mysqli_real_escape_string($connection,$_POST['stock_disponible']);

        

        echo $select = "SELECT * FROM tool_herramienta WHERE numero_parte = '$numero_parte' AND id != $id;";
        $run = mysqli_query($connection, $select);
        if(mysqli_num_rows($run)==0)
        {
            if($q == 1)
            {
                $query = "UPDATE tool_herramienta SET consumible= '$consumible', 
                numero_parte = '$numero_parte', numero_parte_proveedor = '$numero_parte_proveedor', descripcion = '$descripcion',  
                categoria_id = '$categoria_id', marca_id = '$marca_id', 
                proveedor_id = '$proveedor_id', uso = '$uso', planta_id = '$planta_id',  
                precio_unitario = '$precio_unitario', maximo = '$maximo',  
                minimo = '$minimo', reorder_qty = '$reorder_qty', stock = '$stock', 
                descontinuado = '$descontinuado', url = '$target_file', stock_disponible = '$stock', 
                main_cat_id = '$main_cat_id', locacion = '$locacion', stock_disponible = '$stock_disponible' WHERE id = $id;";
            }
            elseif($q == 2)
            {
                $query = "UPDATE tool_herramienta SET consumible= '$consumible',
                numero_parte = '$numero_parte', numero_parte_proveedor = '$numero_parte_proveedor', descripcion = '$descripcion',
                categoria_id = '$categoria_id', marca_id = '$marca_id',
                proveedor_id = '$proveedor_id', uso = '$uso', planta_id = '$planta_id',
                precio_unitario = '$precio_unitario', maximo = '$maximo',  
                minimo = '$minimo', reorder_qty = '$reorder_qty', stock = '$stock',
                descontinuado = '$descontinuado', stock_disponible = '$stock',
                main_cat_id = '$main_cat_id', locacion = '$locacion', stock_disponible = '$stock_disponible' WHERE id = $id;";
            }
            else
            {
                //echo "else";
                //echo $query;
                exit();
            }

           

            $result = mysqli_query($connection, $query);

            if($result)
            {
                //echo $query;
                //header("Location: index.php?page=tool_crib_inventario&error=false");
            }
            else
            {
                echo $query;
                //header("Location: index.php?page=tool_crib_crud&error=insert");    
            }
        }
        else
        {
            //echo $query;
            //header("Location: index.php?page=tool_crib_inventario&error=repeated");
        }
    }
}
*/



function altasEdit()
{
    global $connection;

    if(isset($_POST['edit_alta']))
    {


        /***********archivo */



        $target_dir = "uploads/";
        $target_file = $target_dir .rand().basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
        {
            $uploadOk = 1;
            $q = 1;

            // repetido
            if (file_exists($target_file)) 
            {
                echo "Ya existe.";
                $uploadOk = 0;
            }
            // peso
            if ($_FILES["fileToUpload"]["size"] > 5000000) 
            {
                echo "Solo archivos menores a 5Mb.";
                $uploadOk = 0;
            }

            // formatos
            if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "PNG" && $imageFileType != "png" 
            && $imageFileType != "jpeg" && $imageFileType != "GIF" && $imageFileType != "gif" ) 
            {
                echo "Solo JPG, JPEG, PNG & GIF.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) 
            {
               echo "Error en validacion";
            } 
            else 
            {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                {
                    echo "El archivo:  ". basename( $_FILES["fileToUpload"]["name"]). " fue cargado.";
                } 
                else 
                {
                    echo "Hubo un error al subir el archivo.";
                }
            }
        } 
        else 
        {
            $q = 2;

        }
        
        




        /************archivo */

        $id                         = $_GET['id'];
        $consumible                 = mysqli_real_escape_string($connection,$_POST['consumible']);
        $numero_parte               = mysqli_real_escape_string($connection,$_POST['numero_parte']);
        $numero_parte_proveedor     = mysqli_real_escape_string($connection,$_POST['numero_parte_proveedor']);
        $descripcion                = mysqli_real_escape_string($connection,$_POST['descripcion']);
        $categoria_id               = mysqli_real_escape_string($connection,$_POST['categoria_id']);
        $marca_id                   = mysqli_real_escape_string($connection,$_POST['marca_id']);
        $proveedor_id               = mysqli_real_escape_string($connection,$_POST['proveedor_id']);
        $uso                        = mysqli_real_escape_string($connection,$_POST['uso']);
        $planta_id                  = mysqli_real_escape_string($connection,$_POST['planta_id']);
        $precio_unitario            = mysqli_real_escape_string($connection,$_POST['precio_unitario']);
        $maximo                     = mysqli_real_escape_string($connection,$_POST['maximo']);
        $minimo                     = mysqli_real_escape_string($connection,$_POST['minimo']);
        $reorder_qty                = mysqli_real_escape_string($connection,$_POST['reorder_qty']);
        $main_cat_id                = mysqli_real_escape_string($connection,$_POST['main_cat_id']);
        $stock                      = mysqli_real_escape_string($connection,$_POST['stock']);
        $descontinuado              = mysqli_real_escape_string($connection,$_POST['descontinuado']);
        $locacion                   = mysqli_real_escape_string($connection,$_POST['locacion']);
        $stock_disponible           = mysqli_real_escape_string($connection,$_POST['stock_disponible']);

        

     
        if($q == 1)
        {
            $query = "UPDATE tool_herramienta SET consumible= '$consumible', 
            numero_parte = '$numero_parte', numero_parte_proveedor = '$numero_parte_proveedor', descripcion = '$descripcion',  
            categoria_id = '$categoria_id', marca_id = '$marca_id', 
            proveedor_id = '$proveedor_id', uso = '$uso', planta_id = '$planta_id',  
            precio_unitario = '$precio_unitario', maximo = '$maximo',  
            minimo = '$minimo', reorder_qty = '$reorder_qty', stock = '$stock', 
            descontinuado = '$descontinuado', url = '$target_file', stock_disponible = '$stock', 
            main_cat_id = '$main_cat_id', locacion = '$locacion', stock_disponible = '$stock_disponible' WHERE id = $id;";
        }
        elseif($q == 2)
        {
            $query = "UPDATE tool_herramienta SET consumible= '$consumible',
            numero_parte = '$numero_parte', numero_parte_proveedor = '$numero_parte_proveedor', descripcion = '$descripcion',
            categoria_id = '$categoria_id', marca_id = '$marca_id',
            proveedor_id = '$proveedor_id', uso = '$uso', planta_id = '$planta_id',
            precio_unitario = '$precio_unitario', maximo = '$maximo',  
            minimo = '$minimo', reorder_qty = '$reorder_qty', stock = '$stock',
            descontinuado = '$descontinuado', stock_disponible = '$stock',
            main_cat_id = '$main_cat_id', locacion = '$locacion', stock_disponible = '$stock_disponible' WHERE id = $id;";
        }
        else
        {
            echo "Problema con archivo.";
            //echo $query;
            exit();
        }

           

        $result = mysqli_query($connection, $query);

        if($result)
        {
            //echo $query;
            header("Location: index.php?page=tool_crib_inventario&error=false");
        }
        else
        {
            echo $query;
            header("Location: index.php?page=tool_crib_crud&error=edit");    
        }
       
    }
}



function altasDelete()
{
    global $connection;

    if(isset($_POST['delete_alta']))
    {
        
        $id              = $_GET['id'];
        
        $query = "UPDATE tool_herramienta SET status = 0 WHERE id = $id;";
              

        $result = mysqli_query($connection, $query);

        if($result)
        {
            header("Location: index.php?page=tool_crib_crud&error=false");
        }
        else
        {
            echo $query;
                
        }
    }
}




function movimiento()
{
    global $connection;

    if(isset($_POST['save_movimiento']))
    {

        echo "FUNCIONA";

        $id                     = $_GET['id'];
        $planta_id              = mysqli_real_escape_string($connection,$_POST['planta_id']);
        $ubicacion              = mysqli_real_escape_string($connection,$_POST['ubicacion']);
        $cantidad               = mysqli_real_escape_string($connection,$_POST['cantidad']);
        $tipo                   = 's';
        $responsable            = mysqli_real_escape_string($connection,$_POST['responsable']);
        $responsable_numero     = mysqli_real_escape_string($connection,$_POST['responsable_numero']);
        $requi                  = mysqli_real_escape_string($connection,$_POST['requi']);
        $supervisor             = mysqli_real_escape_string($connection,$_POST['supervisor']);

        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        $user_name = $_SESSION['wh_user_name'];
        
        //seleccionar del inventario

        $get_inventory = "SELECT * FROM tool_herramienta WHERE id = $id";
        $run_get = mysqli_query($connection, $get_inventory);
        $row_inventory = mysqli_fetch_array($run_get);

        $consumible = $row_inventory['consumible'];

        $stock = $row_inventory['stock'];
        $stock_disponible = $row_inventory['stock_disponible'];

        if($cantidad > $stock)
        {
            echo "ERROR stock";
            //no hay suficiente stock
            //header("Location: index.php?page=tool_crib_inventario&error=inventory&id=$id");
        }
        elseif($cantidad > $stock_disponible)
        {
            echo "ERROR stock disponible";
        }
        else
        {
            echo "funciona 2";
            //si hay stock y se reducira el stock
            

            if($consumible == "si")
            {
                $total = $stock - $cantidad;
                $update = "UPDATE tool_herramienta SET stock = '$total', stock_disponible = '$total' WHERE id = $id";
            }
            else
            {
                $total = $stock_disponible - $cantidad;
                $update = "UPDATE tool_herramienta SET stock_disponible = '$total' WHERE id = $id";
            }



            $run_update = mysqli_query($connection, $update);
            if($run_update)
            {
                $query = "INSERT INTO tool_movimientos (herramienta_id, planta_id, movimiento_de, movimiento_a,
                 cantidad, cantidad_pendiente,fecha, user_name, tipo, responsable, responsable_numero, requi, supervisor) 
                VALUES ($id, '$planta_id', 'Tool Crib', '$ubicacion', '$cantidad', '$cantidad','$fecha', '$user_name', '$tipo', '$responsable', '$responsable_numero', 
                '$requi', '$supervisor')";

                $result = mysqli_query($connection, $query);



                if($result)
                {
                    $id_salida = mysqli_insert_id($connection);

                    $query2 = "INSERT INTO tool_movimientos_historicos (id_salida, herramienta_id, planta_id, movimiento_de, movimiento_a,
                    cantidad, fecha, user_name, tipo, requi, supervisor, responsable, responsable_numero) 
                    VALUES ($id_salida, $id, '$planta_id', 'Tool Crib', '$ubicacion', '$cantidad', '$fecha', '$user_name', '$tipo', '$requi', '$supervisor', '$responsable', '$responsable_numero')";

                    $result2 = mysqli_query($connection, $query2);

                    if($result2)
                    {
                        header("Location: index.php?page=tool_crib_inventario&error=false");

                    }
                    else
                    {
                        echo $query2;
                        //header("Location: index.php?page=tool_crib_crud&error=query2");

                    }
                }
                else
                {
                    echo $query;
                    //header("Location: index.php?page=tool_crib_crud&error=query");
                }
            }
            else
            {
                echo $update;
            }

        }
    }
}




function regresar()
{
    global $connection;

    if(isset($_POST['save_regresar']))
    {

        $id              = $_GET['id'];
        $cantidad        = mysqli_real_escape_string($connection,$_POST['cantidad']);
        $tipo            = 'e';
        $res             = $_POST['responsable'];
        $res_num         = $_POST['responsable_numero'];
        $sup             = $_POST['supervisor'];

        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        $user_name = $_SESSION['wh_user_name'];
        
        //datos del movimiento
        $get_mov = "SELECT * FROM tool_movimientos WHERE id = $id";
        $result_mov = mysqli_query($connection, $get_mov);
        $row_mov = mysqli_fetch_array($result_mov);
        
        $id_salida          = $row_mov['id'];
        $herramienta_id     = $row_mov["herramienta_id"];
        $movimiento_de      = $row_mov["movimiento_a"];
        $planta_id          = $row_mov['planta_id'];
        $cantidad_sal       = $row_mov['cantidad_pendiente'];
        $movimiento_a       = "Tool Crib:".$planta_id;


        if($cantidad > $row_mov['cantidad_pendiente'])
        {
            header("Location: index.php?page=tool_crib_mov&error=cantidad&id=$id&movimiento_regresar=true");
        }
        else
        {
            echo "funciona 2";
            //si hay stock y se reducira el stock

            $get_inventory = "SELECT * FROM tool_herramienta WHERE id = $herramienta_id";
            $run_get = mysqli_query($connection, $get_inventory);
            $row_inventory = mysqli_fetch_array($run_get);

            $stock_disponible = $row_inventory['stock_disponible'];


            $total = $stock_disponible + $cantidad;



            $update = "UPDATE tool_herramienta SET stock_disponible = '$total' WHERE id = $herramienta_id";
            $run_update = mysqli_query($connection, $update);
            if($run_update)
            {
                $query = "INSERT INTO tool_movimientos_historicos (id_salida, herramienta_id, planta_id, movimiento_de, movimiento_a,
                 cantidad, fecha, user_name, tipo, supervisor, responsable, responsable_numero) 
                VALUES ($id_salida, $herramienta_id, '$planta_id', '$movimiento_de', '$movimiento_a', '$cantidad', '$fecha', '$user_name', '$tipo', '$sup', '$res', '$res_num')";

                $result = mysqli_query($connection, $query);


                if($result)
                {

                    //si solo se regreso parcialmente
                    $pendiente = $cantidad_sal - $cantidad;

                    $update_regreso = "UPDATE tool_movimientos SET herramienta_id = '$herramienta_id', planta_id = '$planta_id', movimiento_de = '$movimiento_de', 
                    movimiento_a = '$movimiento_a', cantidad_pendiente = '$pendiente', fecha = '$fecha', user_name = '$user_name' WHERE id = $id";

                    $run_update_regreso = mysqli_query($connection, $update_regreso);
                    if($run_update_regreso)
                    {
                        echo "yay";
                    }
                    else
                    {
                        echo "bew: $update_regreso";
                    }


                    header("Location: index.php?page=tool_crib_inventario&error=false");
                }
                else
                {
                    echo $query;
                    //header("Location: index.php?page=tool_crib_crud&error=query");
                }
            }
            else
            {
                echo $update;
            }
        }
    }
}