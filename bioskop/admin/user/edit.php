	<?php
      include '../connection.php';
      $username=$_GET['edit'];
      $sql=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
    ?>

&nbsp;
<div class="container">
	<h3 class="text-center">EDIT USER</h3>
  <form method="POST" action="user/edit_act.php">

  	<?php
	  while ( $baris= mysqli_fetch_assoc($sql)) {
	?>

  	<div class="form-group row">
      <input type="hidden" name="username" value="<?php echo $baris['username'] ?>">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username1" value="<?php echo $baris['username']; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="<?php echo $baris['email']; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password" value="<?php echo $baris['password']; ?>">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
      	<label for="inputPassword3" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="type"<?php 
              	if ($baris['type']!='admin'){
              		echo ' checked';
              	}
               ?>>
              User
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="type" value="admin"<?php 
              	if ($baris['type']=='admin'){
              		echo ' checked';
              	}
               ?>>
              Admin
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
    	<label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
    </div>

    <?php } ?>

  </form>
</div>