<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
        <div class="row">
            <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="save.php" method="POST"> 
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" 
                            placeholder="Documento" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea input type="text" name="contenido" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <select name="proceso"class="form-select" aria-label="Default select example" id="b" onchange="ShowSelected();">
                                    <option value="0">Seleccione Proceso:</option>
                                    <?php
                                        
                                        $pro="SELECT * FROM pro_proceso";
                                        $r=mysqli_query($conn,$pro);
                                        while ($valores = mysqli_fetch_array($r)) {
                                            echo '<option value="'.$valores['PRO_ID'].'">'.$valores['PRO_NOMBRE']." (".$valores['PRO_PREFIJO'].")".'</option>';                          
                                        }                            
                                    ?>
                             </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <select name="tipo" class="tip form-select"  aria-label="Default select example" id="a" onchange="ShowSelected();">
                                    <option value="0">Seleccione tipo de documento:</option>
                                    <?php
                                        
                                        $pro="SELECT * FROM tip_tipo_doc";
                                        $r=mysqli_query($conn,$pro);
                                        while ($valores = mysqli_fetch_array($r)) {
                                            echo '<option value="'.$valores['TIP_ID'].'">'.$valores['TIP_NOMBRE']." (".$valores['TIP_PREFIJO'].")".'</option>';                          
                                        }
                                                                  
                                    ?>
                             </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="codigo" id="title"class="form-control" 
                            placeholder="xxxx-xxxx">
                        </div>
                        <br>
                        <center><input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar"></center>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CODIGO</th>
                        <th>CONTENIDO</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("db.php");
                        $RES="SELECT * FROM doc_documento";
                        $result_tasks = mysqli_query($conn, $RES);
                        while($row = mysqli_fetch_assoc($result_tasks)) { 
                    ?>
                    <tr>
                        <td><?php echo $row['DOC_ID']; ?></td>
                        <td><?php echo $row['DOC_NOMBRE']; ?></td>
                        <td><?php echo $row['DOC_CODIGO']; ?></td>
                        <td><?php echo $row['DOC_CONTENIDO']; ?></td>
                        <td>
                        <a href="edit.php?id=<?php echo $row['DOC_ID']?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $row['DOC_ID']?>" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        </td>
                     </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>


<?php include("includes/footer.php") ?>
<?php include("includes/script.php") ?>