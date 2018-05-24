<?php
	include '../connection.php';
	session_start();
	$kdfilm=$_POST['kdfilm'];
	$username=$_SESSION['username'];
	$kursi=$_POST['kursi'];
	$totharga=$_POST['harga'];

if ($kursi==null){
	?>
	<script type="text/javascript">
	alert('BANGKU TIDAK BOLEH KOSONG !!!');
	window.location='../index.php?beli=<?php echo "$kdfilm"; ?>';
	</script>
	<?php
}
else{
	$sql=mysqli_query($koneksi,"Insert into transaksi (kdfilm,username,bangku,totharga) values ('$kdfilm','$username',$kursi,$totharga)");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='../index.php';
				</script>
			<?php
		//header("location:index.php?film");
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='../index.php?beli=<?php echo "$kdfilm"; ?>';
				</script>
			<?php
		//header("location:../index.php?beli=$kdfilm");
	}
}
?>