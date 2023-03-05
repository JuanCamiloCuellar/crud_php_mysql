<?php include("db.php") ?>
<?php include("includes/header.php") ?>


    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" 
                            placeholder="Documento" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" 
                            placeholder="Código" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>

<?php include("includes/footer.php") ?>
