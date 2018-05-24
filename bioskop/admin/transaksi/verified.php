<?php
	include '../connection.php';
	$verified=$_GET['verified'];

	$sql=mysqli_query($koneksi,"UPDATE transaksi SET status='verified' WHERE idtrans=$verified");

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