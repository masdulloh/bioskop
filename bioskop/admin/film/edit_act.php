<?php
	include '../../connection.php';
	$kdfilm1=$_POST['kdfilm1'];
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

  $sql=mysqli_query($koneksi,"UPDATE film SET kdfilm='$kdfilm',judul='$judul',poster='$poster',trailer='$trailer',durasi=$durasi,sinopsis='$sinopsis',harga=$harga where kdfilm='$kdfilm1'");

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
        window.location='../?editfilm=<?php echo $kdfilm1 ?>';
        </script>
    <?php
  }
}else{

    ?>
        <script type="text/javascript">
        alert('GAGAL SAVE FOTO');
        window.location='../?editfilm=<?php echo $kdfilm1 ?>';
        </script>
    <?php
}
?>