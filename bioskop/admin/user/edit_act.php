<?php
	include '../../connection.php';
	$username1=$_POST['username1'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if ($_POST['type']=='admin') {
		$type='admin';
	}else{
		$type=null;
	}

	$sql=mysqli_query($koneksi,"UPDATE user SET username='$username1', email='$email', password='$password', type='$type' where username='$username'");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='../?user';
				</script>
			<?php
		//header("location:index.php?film");
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='../index.php?edit=<?php echo $username; ?>';
				</script>
			<?php
		//header("location:../index.php?beli=$kdfilm");
	}
?>