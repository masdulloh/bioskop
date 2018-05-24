
&nbsp;
<div class="container">
  <h3 class="text-center">TAMBAH USER</h3>
  <form method="POST" action="user/tambah_act.php">

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password" placeholder="Password">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="type">
              User
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="type" value="admin">
              Admin
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">TAMBAH</button>
      </div>
    </div>


  </form>
</div>