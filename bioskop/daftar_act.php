<?php
	include 'connection.php';
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql=mysqli_query($koneksi,"Insert into user 
		(username,email,password) values ('$username','$email','$password')");

	if($sql==true)
	{
		header("location:index.php");
	}
	else
	{
		header("location:daftar.php");
	}
?>