<?php
include 'connection.php';
session_start();

if(isset($_POST["Submit"]))
{
	//menyimpan data dari inputan user ke variabel
	$username = $_POST['username'];
	$password = $_POST['password'];

 	//cek tabel, apakah username yang diinputkan ada tau tidak
	$hasil = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' and password = '$password'");
	$row = mysqli_num_rows($hasil);
	//jika ada
	if ($row>0) {
			$_SESSION['username'] = $username;
			?>
				<script type="text/javascript">
				window.location='index.php';
				</script>
				<?php
			//	header("location:home.php");
	}
	else{
		?>
			<script type="text/javascript">
			alert('maaf, username atau password yang anda inputkan salah');
			window.location="login.php";
			</script>
		<?php
			//header("location:index.php");
		}
}
?>