<?php

require_once(../config/conexion.php);
require_once(../model/Productos.php);

$producto = new Productos();
switch($_GET("op")){
    case "listar";
    $datos = $producto->get_producto();

    $data = Array();

    foreach($datos as $row){
        $sub_array[] = $row("prod_nom");
        $sub_array[] = $row("prod_id");
        $sub_array[] = $row("prod_id");

        $data[] = $sub_array
    }
    $result = array{
        "sEcho"=> 1,
        "iTotalRecords"=> count($data),
        "iTotalDisplayRecords"=> count($data),
        "aaData"=> $data
    }
            echo json_encode($data[]);
            
            break;
}

// git add .
// git commit -m "added product model and controller"
// git push
?>