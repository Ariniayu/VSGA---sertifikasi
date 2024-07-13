<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus - Transaksi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Form Transaksi</h1>
        <?php
        include_once "koneksi.php";

        $query_anggota = "SELECT * FROM anggota";
        $result_anggota = mysqli_query($koneksi, $query_anggota);

        $query_buku = "SELECT * FROM buku";
        $result_buku = mysqli_query($koneksi, $query_buku);

        ?>
        <form action="transaksi_act.php" method="POST">
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Anggota</label>
                <div class="col-lg-3">

                    <select name="anggota" id="anggota" class="form-select">
                        <?php
                        foreach ($result_anggota as $key => $value) {

                        ?>
                            <option value="<?= $value["id"] ?>"><?= $value['nama']; ?> [<?= $value["idanggota"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Buku</label>
                <div class="col-lg-3">

                    <select name="buku" id="buku" class="form-select">
                        <?php
                        foreach ($result_buku as $key => $value) {

                        ?>
                            <option value="<?= $value["id_buku"] ?>"><?= $value['judul_buku']; ?> [<?= $value["ISBN"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam">
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Kembali</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <button class="btn btn-primary">Kirim</button>
                    <a href="transaksi_read.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
</body>