<?php
  include '../../connection.php';
  $idtrans=$_POST['idtrans'];
  $status=$_POST['status'];
  $totharga=$_POST['totharga'];
  $kursi=$_POST['kursi'];


if ($kursi==null){
  ?>
  <script type="text/javascript">
  alert('BANGKU TIDAK BOLEH KOSONG !!!');
  window.location='../?edittransaksi=<?php echo $idtrans; ?>';
  </script>
  <?php
}
else{
  $sql=mysqli_query($koneksi,"UPDATE transaksi SET bangku=$kursi,totharga=$totharga,status='$status' where idtrans=$idtrans");

  if($sql==true)
  {

    ?>
        <script type="text/javascript">
        alert('BERHASIL');
        window.location='../?transaksi';
        </script>
      <?php
  }
  else
  {
    ?>
        <script type="text/javascript">
        alert('GAGAL...........');
        window.location='../?edittransaksi=<?php echo $idtrans; ?>';
        </script>
      <?php

  }
}
?>