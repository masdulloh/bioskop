
&nbsp;
<div class="container">
  <h3 class="text-center">Tambah FILM</h3>
  <form method="POST" enctype="multipart/form-data" action="film/tambah_act.php">

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Film</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="kdfilm" placeholder="misal: fil002">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="judul" placeholder="Judul">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Poster</label>
      <div class="col-sm-10">
        <input type="file" class="form-control-file" name="poster">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Trailer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="trailer" placeholder="Masukkan link trailer youtube">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Durasi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="durasi" placeholder="Durasi">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="harga" placeholder="Harga">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Sinopsis</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="sinopsis" rows="8"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">TAMBAH FILM</button>
      </div>
    </div>


  </form>
</div>
&nbsp;