<?php
	include 'connection.php';

	$kdfilm=$_GET['beli'];
    $sql=mysqli_query($koneksi,"Select * from film where kdfilm='$kdfilm'");
    

  while ( $baris= mysqli_fetch_assoc($sql)) {
?>
&nbsp;
<div class="container text-light col-md-8">
	<form method="post" action="page/beli_act.php">
	<div class="form-group" hidden>
	    <label for="inputAddress" class="col-form-label">Kodefilm</label>
	    <input type="text" readonly class="form-control-plaintext text-light" id="staticEmail" name="kdfilm" value="<?php echo $baris['kdfilm']; ?>">
	</div>

	<div class="form-group">
	    <label for="inputAddress" class="col-form-label">Judul</label>
	    <input type="text" readonly class="form-control-plaintext text-light" id="staticEmail" name="judul" value="<?php echo $baris['judul']; ?>">
	</div>
	  <div class="form-group">
	    <label for="inputAddress2" class="col-form-label">Pilih Tempat Duduk</label>
	    <div class="col-sm-10 border">
	    	<ol class="breadcrumb bg-dark">
			  <li class="align-text-center">Layar</li>
			</ol>
	    	<?php
	    	$sql2=mysqli_query($koneksi,"Select * from transaksi where kdfilm='$kdfilm'");
		
		
		    	for ($i=1; $i <= 50  ; $i++) { 
			    	if ($i % 10 ==0) {
			    		?>	<div class="form-check form-check-inline">
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
	 <div class="form-group">
	    <label for="inputAddress" class="col-form-label">Harga</label>
	    <input type="text" readonly hidden class="form-control-plaintext text-light" name="harga" value="<?php echo $baris['harga']; ?>"><br>Rp. <?php echo number_format($baris['harga'],0,".","."); ?>
	</div>

	  <button type="submit" class="btn btn-primary btn-block">BELI</button>
	</form>
</div>
&nbsp;

<?php } ?>