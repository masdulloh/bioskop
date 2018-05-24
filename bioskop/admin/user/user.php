	<?php
      include '../connection.php';
      $sql=mysqli_query($koneksi,"SELECT * FROM user ORDER BY type DESC");
    ?>
<div class="container">
	<h3 class="text-center">DATA USER</h3>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th>No</th>
	      <th>Username</th>
	      <th>Email</th>
	      <th>Password</th>
	      <th>Type</th>
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
	      <td><?php echo $baris['username']; ?></td>
	      <td><?php echo $baris['email']; ?></td>
	      <td><?php echo $baris['password']; ?></td>
	      <td><?php 
	      	if ($baris['type']=='admin'){
	      		echo '<span class="badge badge-pill badge-primary">Admin</span>';
	      	}else{
	      		echo '<span class="badge badge-pill badge-secondary">User</span>';
	      	}

	       ?></td>
	       <td><a class="btn btn-outline-success btn-sm" href="?edit=<?php echo $baris['username']; ?>">EDIT</a>&nbsp;
	       	<a class="btn btn-outline-danger btn-sm" href="?hapus=<?php echo $baris['username']; ?>">HAPUS</a></td>
	    </tr>
<?php } ?>
	  </tbody>
	</table>
</div>