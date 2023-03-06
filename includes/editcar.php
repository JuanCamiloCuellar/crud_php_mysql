<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input name="DOC_NOMBRE" type="text" class="form-control" value="<?php echo $NOMBRE; ?>"
              placeholder="Update Title">
          </div>
          <br>
          <div class="form-group">
            <textarea name="DOC_CONTENIDO" class="form-control" cols="30" rows="10"><?php echo $CONTENIDO;?></textarea>
          </div>
          <br>
          <center><button type="submit" class="btn btn-success btn-block" name="update">Actualizar</button></center>
          
        </form>
      </div>
    </div>
  </div>
</div>