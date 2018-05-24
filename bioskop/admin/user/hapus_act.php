<?php
	include '../connection.php';
	$username=$_GET['hapus'];

	$sql=mysqli_query($koneksi,"DELETE FROM user WHERE username='$username'");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='?user';
				</script>
			<?php
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='?user';
				</script>
			<?php

	}
?>