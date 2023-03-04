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
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <form method="post">
                            <div class="form-outline form-white mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Usuario"  name="username">
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" class="form-control form-control-lg" placeholder="Password"  name="password">
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar sesión</button>
                        </form>
                    </div>
                    <?php echo "<br>" ?>
                    <?php if (isset($error_message)) { ?>
                        <p><?php echo $error_message; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>