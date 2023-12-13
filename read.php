<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    // require 'conexionBBDD.php';

    // $columns=['CodProducto','Imagen',	
    //     'Producto',	'Precio','Detalles'];
    // $table=  'productos';  
    // $campo= isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

    // $where= '';
    // if ($campo != null) {
    //     $where.= 'WHERE (';

    //     $cont= count($columns);
    //     for ($i=0; $i < $cont; $i++) { 
    //         $where.= $columns[$i]."LIKE '%".$campo. "%' OR";
    //     }
    //     $where= substr_replace($where, "", -3);
    //     $where.= ")";
    // }
    
    // $dos="SELECT" . implode(",", $columns) . " FROM $table
    // $where";

    
    // $restt=$conexion->query($dos);
    // $num_rows= $restt->$num_rows;

    // $html= '';

    // if ($num_rows>0) {
    //     while ($row = $restt->fetch_assoc()) {
    //         $html.= '<tr>';
    //         $html.= '<td>'.$row['CodProducto']. '</td>';
    //         $html.= '<td>'.$row['Imagen']. '</td>';
    //         $html.= '<td>'.$row['Producto']. '</td>';
    //         $html.= '<td>'.$row['Precio']. '</td>';
    //         $html.= '<td>'.$row['Detalles']. '</td>';
    //         $html.= '</tr>';
    //     }
    // }else {
    //     $html.= '<tr>';
    //     $html.= '<td colspan="5">Sin resultados</td>';
    //     $html.= '</tr>';
    // }
    
    // echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>
    
</body>
</html>