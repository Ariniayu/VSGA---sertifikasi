<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Anggota</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
  <div class="container" id="anggota">
    <h1>Tambah Data Anggota</h1>

    <?php
    include_once 'koneksi.php';

    if (@$_GET['id']) { 
      $id = $_GET['id'];

      $query = "SELECT * FROM anggota WHERE id = '$id'";
      $data_anggota = mysqli_query($koneksi, $query);
      $anggota = mysqli_fetch_array($data_anggota);
    }
    ?>

    <form action="anggota_act.php" method="POST" enctype="multipart/form-data"> 
    <!-- <?php
//     if (@$_GET['id']){
//       echo '<div class="row mb-3">
//       <label for="id" class="col-lg-2 col-form-label">ID: </label>
//       <div class="col-lg-2">
//         <input type="text" name="id" id="id" class="form-control" value="'.$anggota['id'].'" disabled>
//   </div>
// </div>';
//     }
    ?> -->
    <div class="row mb-3">
      <label for="id" class="col-lg-2 col-form-label">ID: </label>
      <div class="col-lg-2">
        <input type="text" name="id" id="id" class="form-control" value="" readonly>
  </div>
</div> 
    <div class="row mb-3">
          <label for="idanggota" class="col-lg-2 col-form-label">ID Anggota: </label>
          <div class="col-lg-2">
            <input type="text" name="idanggota" id="idanggota" class="form-control" value="<?= @$anggota['idanggota']?>">
      </div>
    </div>

      <div class="row mb-3">
        <label for="nama" class="col-lg-2 col-form-label">Nama Anggota</label>
        <div class="col-lg-4">
          <input type="text" name="nama" id="nama" class="form-control" value="<?= @$anggota['nama'] ?>">
          </div>
      </div>

      <div class="row mb-3">
        <label for="nama" class="col-lg-2 col-form-label">Alamat</label>
        <div class="col-lg-6">
          <input type="text" name="alamat" id="alamat" class="form-control" value="<?= @$anggota['alamat'] ?>" />
          </div>
      </div>

        <div class=" row mb-3">
          <label for="jeniskelamin" class="col-lg-2 col-form-label">Jenis Kelamin: </label>
          <div class="col-lg-4">
            <div class="form-check">
              <input  type="radio" name="jeniskelamin" id="jeniskelamin" value="L" class="form-check-input" <?= (@$anggota['jeniskelamin'] == 'L') ? 'checked' : '' ?> />
              <label for="jeniskelamin" class="form-check-label" > Laki-Laki </label>
            </div>

            <div class="form-check">

              <input  type="radio" name="jeniskelamin" id="jeniskelamin" value="P" class="form-check-input" <?= (@$anggota['jeniskelamin'] == 'P') ? 'checked' : '' ?> />
              <label for="jeniskelamin" class="form-check-label" > Perempuan </label>
            </div>
          </div>
          </div>
          
        <div class="row mb-3">
          <label for="foto" class="col-lg-2 col-form-label">Foto</label>
          <div class="col-lg-6">
            <?= (@$anggota['foto']) ? '<img src="public/' . @$anggota['foto'] . '"width="300" class="mb-3"/>' : '' ?>
            <input type="file" name="foto" id="foto" class="form-control">
            <input type="hidden" name="foto_lama" value="<?=@$anggota['foto']?>">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-lg-6 offset-lg-2">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="anggota_read.php" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </form>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html