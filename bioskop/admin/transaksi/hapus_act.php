<?php
	include '../connection.php';
	$idtrans=$_GET['hapustransaksi'];

	$sql=mysqli_query($koneksi,"DELETE FROM transaksi WHERE idtrans='$idtrans'");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='?transaksi';
				</script>
			<?php
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='?transaksi';
				</script>
			<?php

	}
?>