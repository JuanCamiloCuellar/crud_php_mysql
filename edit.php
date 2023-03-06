<?php
include("db.php");
$NOMBRE = '';
$CONTENIDO= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT DOC_NOMBRE, DOC_CONTENIDO FROM doc_documento WHERE DOC_ID=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $NOMBRE = $row['DOC_NOMBRE'];
    $CONTENIDO = $row['DOC_CONTENIDO'];
      
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $NOMBRE = $_POST['DOC_NOMBRE'];
    $CONTENIDO = $_POST['DOC_CONTENIDO'];
    

  $query = "UPDATE doc_documento set DOC_NOMBRE = '$NOMBRE', DOC_CONTENIDO = '$CONTENIDO' WHERE DOC_ID=$id";
    mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: principal.php');
}

?>
<?php include('includes/header.php'); ?>
<?php include('includes/editcar.php'); ?>
<?php include('includes/footer.php'); ?>