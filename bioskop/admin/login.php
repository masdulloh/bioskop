<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/docs.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
  </head>
  <body>
<main class="bd-masthead" id="content" role="main">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col mx-auto col-md-6 order-md-2">
        <h3 class="text-center">Login ADMIN</h3>
        &nbsp;
            <form name="form_login" method="POST" action="login_act.php">
                <input class="form-control form-control-lg" type="text" name="username" required="required" placeholder="Username">
                &nbsp;
                <input class="form-control form-control-lg" type="Password" name="password" required="required" placeholder="Password">
                &nbsp;
                <div class="d-flex flex-column flex-md-row lead mb-3">
                  <button class="btn btn-lg btn-primary mb-3 mb-md-0 mr-md-3" type="Submit" name="Submit">LOGIN</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</main>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>