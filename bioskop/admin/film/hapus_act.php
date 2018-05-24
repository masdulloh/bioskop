<?php
	include '../connection.php';
	$kdfilm=$_GET['hapusfilm'];

	$sql=mysqli_query($koneksi,"DELETE FROM film WHERE kdfilm='$kdfilm'");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='?film';
				</script>
			<?php
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='?film';
				</script>
			<?php

	}
?>