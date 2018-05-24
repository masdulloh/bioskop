<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/docs.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  </head>
  <body class="hitam">


    <?php
      session_start();

    if (empty($_SESSION['username'])) {
    ?>
      <script type="text/javascript">
      window.location="login.php";
      </script>

      <?php

     } 
    include "header.php";

         if (isset($_GET['detail'])) {
            include "page/detail.php";
         }
         else if (isset($_GET['film'])) {
            include "page/film.php";
         }
         else if (isset($_GET['beli'])) {
            include "page/beli.php";
         }
         else if (isset($_GET['troli'])) {
            include "page/troli.php";
         }
         else{
            include "page/home.php";
         }
         
    ?>

    
<footer class="bd-footer text-muted hitam border border-secondary border-right-0 border-bottom-0 border-left-0">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li><a href="admin/" target="_blank">Admin </a></li>
      <li><a href="#" target="_blank">Twitter</a></li>
      <li><a href="#" target="_blank">Examples</a></li>
      <li><a href="#" target="_blank">About</a></li>
    </ul>
    <p>Dibuat oleh <b>Muhammad Abdullah</b>, NIM <b>5160411177</b>.</p>
  </div>
</footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>