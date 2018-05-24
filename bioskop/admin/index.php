<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/docs.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
  </head>
  <body>


    <?php
      session_start();

    if (empty($_SESSION['admin'])) {
    ?>
      <script type="text/javascript">
      window.location="login.php";
      </script>

      <?php

     } 
    include "header.php";

         if (isset($_GET['user'])) {
            include "user/user.php";
         }
         else if (isset($_GET['edit'])) {
            include "user/edit.php";
         }
         else if (isset($_GET['hapus'])) {
            include "user/hapus_act.php";
         }
         else if (isset($_GET['tambah'])) {
            include "user/tambah.php";
         }
         else if (isset($_GET['film'])) {
            include "film/film.php";
         }
         else if (isset($_GET['editfilm'])) {
            include "film/edit.php";
         }
         else if (isset($_GET['hapusfilm'])) {
            include "film/hapus_act.php";
         }
         else if (isset($_GET['tambahfilm'])) {
            include "film/tambah.php";
         }
         else if (isset($_GET['transaksi'])) {
            include "transaksi/transaksi.php";
         }
         else if (isset($_GET['edittransaksi'])) {
            include "transaksi/edit.php";
         }
         else if (isset($_GET['hapustransaksi'])) {
            include "transaksi/hapus_act.php";
         }
         else if (isset($_GET['verified'])) {
            include "transaksi/verified.php";
         }
         else{
            include "home.php";
         }
         
    ?>

    
<footer class="bd-footer text-muted border border-secondary border-right-0 border-bottom-0 border-left-0">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li><a href="../" target="_blank">Interface</a></li>
    </ul>
    <p>Dibuat oleh <b>Muhammad Abdullah</b>, NIM <b>5160411177</b>.</p>
  </div>
</footer>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>