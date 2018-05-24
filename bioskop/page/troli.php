<?php 
include 'connection.php';
$user=$_SESSION['username'];
$sql=mysqli_query($koneksi,"SELECT film.judul, transaksi.bangku, transaksi.totharga, transaksi.tanggal, transaksi.status FROM transaksi JOIN film ON transaksi.kdfilm=film.kdfilm WHERE username='$user' ORDER BY tanggal DESC");
 ?>
&nbsp;
<div class="container text-light">
  <h2 class="text-center">Keranjang belanja</h2>
  <table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul film</th>
      <th>Bangku</th>
      <th>Harga</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
  </thead>
<?php
  $w=0;
  while ( $baris= mysqli_fetch_assoc($sql)) {
    $w++;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $w; ?></th>
      <td><?php echo $baris['judul']; ?></td>
      <td><?php echo $baris['bangku']; ?></td>
      <td>Rp. <?php echo number_format($baris['totharga'],0,".","."); ?></td>
      <td><?php echo $baris['tanggal']; ?></td>
      <td><?php 
        if ($baris['status']=='verified') {
          echo '<span class="badge badge-success">Verified</span>';
        }
        else{
          echo '<span class="badge badge-danger">Unverified</span>';
        }
       ?></td>
    </tr>  
  </tbody>
<?php } ?>
</table>
</div>