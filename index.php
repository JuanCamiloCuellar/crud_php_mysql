<?php include("includes/header.php") ?>
<?php echo "<br>" ?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {

            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('Location: principal.php');
            exit;
        } else {

            $error_message = 'Usuario o contraseña incorrectos';
        }
    } else {

        $error_message = 'Por favor ingrese su usuario y contraseña';
    }
}
?>
<?php include("includes/inter.php") ?>

<?php include("includes/footer.php") ?>