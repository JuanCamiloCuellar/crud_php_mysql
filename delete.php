<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM doc_documento WHERE DOC_ID  = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro eliminado exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: principal.php');
}

?>