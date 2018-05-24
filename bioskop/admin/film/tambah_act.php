<?php
	include '../../connection.php';
	$kdfilm=$_POST['kdfilm'];
	$judul=$_POST['judul'];
	$sinopsis=$_POST['sinopsis'];
  $trailer=$_POST['trailer'];
  $durasi=$_POST['durasi'];
	$harga=$_POST['harga'];
	$poster=$_FILES['poster']['name'];
	$tmp=$_FILES['poster']['tmp_name'];


// Set path folder tempat menyimpan fotonya
$path = "../../poster/".$poster;
// Proses upload
if(move_uploaded_file($tmp, $path)){; // Cek apakah gambar berhasil diupload atau tidak

  $sql=mysqli_query($koneksi,"Insert into film values ('$kdfilm','$judul','$poster','$trailer',$durasi,'$sinopsis',$harga)");

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
        ?>
        <script type="text/javascript">
        alert('BERHASIL');
        window.location='../?film';
        </script>
      <?php
  }else{

    ?>
        <script type="text/javascript">
        alert('GAGAL SAVE KE DATABASE');
        window.location='../?tambahfilm';
        </script>
    <?php
  }
}else{

    ?>
        <script type="text/javascript">
        alert('GAGAL SAVE FOTO');
        //window.location='../?tambahfilm';
        </script>
    <?php
}
?>