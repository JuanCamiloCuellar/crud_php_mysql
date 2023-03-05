<?php
$conn = mysqli_connect (
    'localhost',
    'root',
    '',
    'crud'
);

$sql = "SELECT PRO_NOMBRE, PRO_PREFIJO FROM pro_proceso";

$resultado = mysqli_query($conn, $sql);
/*
if (isset($conn)){
    echo"Base de datos conectada";
}
*/
?>