<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $contenido = $_POST['contenido'];
  $proceso = $_POST['proceso'];
  $tipo = $_POST['tipo'];
  $codigo = $_POST['codigo'];
  $query = "INSERT INTO doc_documento(DOC_NOMBRE,DOC_CONTENIDO,DOC_ID_PROCESO,DOC_ID_TIPO,DOC_CODIGO) VALUES ('$nombre', '$contenido','$proceso','$tipo','$codigo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: principal.php');

}

?>