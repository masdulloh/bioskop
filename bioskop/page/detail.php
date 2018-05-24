<?php
	include 'connection.php';

	$kdfilm=$_GET['detail'];
    $sql=mysqli_query($koneksi,"Select * from film where kdfilm='$kdfilm'");
    ?>
<div class="container-fluid text-light hitam">
<?php
  while ( $baris= mysqli_fetch_assoc($sql)) {
?>
	&nbsp;
	<ol class="breadcrumb bg-dark">
	  <li class="breadcrumb-item"><a class="text-light" href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Film</li>
	  <li class="breadcrumb-item"><?php echo $baris['judul']; ?></li>
	</ol>
&nbsp;
<div class="embed-responsive embed-responsive-16by9 rounded">
  <iframe class="embed-responsive-item" src="<?php echo $baris['trailer']; ?>" allowfullscreen></iframe>
</div>
&nbsp;
 <div class="row">
  	<div class="col-sm-3">
  		<img class="img-fluid  rounded" alt="Responsive image" src="poster/<?php echo $baris['poster']; ?>">
  		&nbsp;
  	</div>
  	<div class="col-sm-9">
		<table class="table">
		  <tbody>
		    <tr>
		      <th><b>Judul</b></th>
		      <td><?php echo $baris['judul']; ?></td>
		    </tr>
		    <tr>
		      <th>Durasi</th>
		      <td><?php echo $baris['durasi']; ?> Menit</td>
		    </tr>
		    <tr>
		      <th>Harga</th>
		      <td>Rp. <?php echo number_format($baris['harga'],0,".","."); ?></td>
		    </tr>
		    <tr>
		      
		      <td colspan="2"><b>Sinopsis</b><br><?php echo $baris['sinopsis']; ?></td>
		    </tr>
		  </tbody>
		</table>

		
	</div>

	</div>
	<a class="btn btn-lg btn-primary btn-block" href="?beli=<?php echo $baris['kdfilm']; ?>">BELI TIKET</a>
	&nbsp;
<?php } ?>
</div>