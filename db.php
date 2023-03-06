<?php
$conn = mysqli_connect (
    'localhost',
    'root',
    '',
    'mi_base_de_datos'
);

$sql = "SELECT * FROM pro_proceso";
$resultado = mysqli_query($conn, $sql);

$sql = "SELECT * FROM tip_tipo_doc";
$resultado1 = mysqli_query($conn, $sql);




/*
if (isset($conn)){
    echo"Base de datos conectada";
}
*/
?>