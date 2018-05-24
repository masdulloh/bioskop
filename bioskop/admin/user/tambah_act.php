<?php
	include '../../connection.php';
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if ($_POST['type']=='admin') {
		$type='admin';
	}else{
		$type=null;
	}

	$sql=mysqli_query($koneksi,"Insert into user 
		(username,email,password,type) values ('$username','$email','$password','$type')");

	if($sql==true)
	{

		?>
				<script type="text/javascript">
				alert('BERHASIL');
				window.location='../?user';
				</script>
			<?php
	}
	else
	{
		?>
				<script type="text/javascript">
				alert('GAGAL...........');
				window.location='../?tambah';
				</script>
			<?php
	}
?>