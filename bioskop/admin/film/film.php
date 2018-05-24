	<?php
      include '../connection.php';
      $sql=mysqli_query($koneksi,"SELECT * FROM film");
    ?>
<div class="container-fluid">
	<h3 class="text-center">DATA FILM</h3>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th>No</th>
	      <th>Judul</th>
	      <th>Poster</th>
	      <th>Durasi</th>
	      <th>Harga</th>
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
	      <td><?php echo $baris['judul']; ?></td>
	      <td><?php echo $baris['poster']; ?></td>
	      <td><?php echo $baris['durasi']; ?></td>
	      <td>Rp. <?php echo $baris['harga']; ?></td>
	       <td><a class="btn btn-outline-success btn-sm" href="?editfilm=<?php echo $baris['kdfilm']; ?>">EDIT</a>&nbsp;
	       	<a class="btn btn-outline-danger btn-sm" href="?hapusfilm=<?php echo $baris['kdfilm']; ?>">HAPUS</a></td>
	    </tr>
<?php } ?>
	  </tbody>
	</table>
</div>