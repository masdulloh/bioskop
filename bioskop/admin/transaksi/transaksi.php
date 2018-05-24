	<?php
      include '../connection.php';
      $sql=mysqli_query($koneksi,"SELECT transaksi.idtrans, film.judul, transaksi.username ,transaksi.bangku, transaksi.totharga, transaksi.tanggal, transaksi.status FROM transaksi JOIN film ON transaksi.kdfilm=film.kdfilm ORDER BY tanggal DESC");
    ?>
<div class="container-fluid">
	<h3 class="text-center">DATA Transaksi</h3>
	<table class="table table-striped">
	  <thead>
	    <tr>
	    	<th>NO</th>
	      <th>Kode</th>
	      <th>Film</th>
	      <th>Pembeli</th>
	      <th>Seat</th>
	      <th>Total Harga</th>
	      <th>Status</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
<?php
$w=0;
  while ( $baris= mysqli_fetch_assoc($sql)) {
  	$w++;
?>
	    <tr>
		    <th scope="row"><?php echo $w; ?></th>
		    <td><?php echo $baris['idtrans']; ?></td>
		    <td><?php echo $baris['judul']; ?></td>
		    <td><?php echo $baris['username']; ?></td>
		    <td><?php echo $baris['bangku']; ?></td>
		    <td>Rp. <?php echo number_format($baris['totharga'],0,".","."); ?></td>
		    <td><?php

		    	if( $baris['status']=='verified' ){
		    		echo $baris['status'];
		    	}else{
		    		echo '<a class="btn btn-outline-info btn-sm" href="?verified='.$baris['idtrans'].'">verified</a>';
		    	}

		    ?></td>
	       	<td><a class="btn btn-outline-success btn-sm" href="?edittransaksi=<?php echo $baris['idtrans']; ?>">EDIT</a>&nbsp;
	       	<a class="btn btn-outline-danger btn-sm" href="?hapustransaksi=<?php echo $baris['idtrans']; ?>">HAPUS</a></td>
	    </tr>
<?php } ?>
	  </tbody>
	</table>
</div>