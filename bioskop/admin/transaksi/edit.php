	<?php
      include '../connection.php';
      $idtrans=$_GET['edittransaksi'];
      $sql=mysqli_query($koneksi,"SELECT * FROM transaksi WHERE idtrans=$idtrans");
    ?>

&nbsp;
<div class="container">
	<h3 class="text-center">EDIT TRANSAKSI</h3>
  <form method="POST" action="transaksi/edit_act.php">

  	<?php
	  while ( $baris= mysqli_fetch_assoc($sql)) {
	?>

  	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Transaksi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" readonly name="idtrans" value="<?php echo $baris['idtrans'] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Film</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" readonly name="kdfilm" value="<?php echo $baris['kdfilm'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" readonly name="username" value="<?php echo $baris['username'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputAddress2" class="col-sm-2 col-form-label">Seat</label>
      <div class="col-sm-10 border">
        &nbsp;
        <ol class="breadcrumb">
          <li class="align-text-center">Layar</li>
        </ol>
        <?php
        $kdfilm=$baris['kdfilm'];
        $sql2=mysqli_query($koneksi,"Select * from transaksi where kdfilm='$kdfilm'");
    
    
          for ($i=1; $i <= 50  ; $i++) { 
            if ($i % 10 ==0) {
              ?>  <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="kursi" id="inlineRadio1" value="<?php echo $i; ?>" 
                    <?php 
                    while ( $baris2= mysqli_fetch_assoc($sql2)) {
                      if ($baris2['bangku']==$i) {
                        echo 'disabled';
                      }
                    }?>> <?php echo $i; ?>
                    
                  </label>
                </div><br><?php 
            }
            else{
              ?> <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="kursi" id="inlineRadio1" value="<?php echo $i; ?>" 
                    <?php
                    while ( $baris2= mysqli_fetch_assoc($sql2)) {
                      if ($baris2['bangku']==$i) {
                        echo 'disabled';
                      }
                    }?>> <?php echo sprintf("%02d",$i) ?>
                  </label>
                </div>&nbsp;&nbsp;<?php 
            }
          }
        ?>
        </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Total Harga</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="totharga" value="<?php echo $baris['totharga'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="status" value="<?php echo $baris['status'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">EDIT TRANSAKSI</button>
      </div>
    </div>

    <?php } ?>

  </form>
</div>