<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses File</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Anggota</h1>
        <a href="anggota_add.php" class="mb-3 btn btn-primary"> Tambah data Anggota</a>
        <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>ID Anggota</td>
            <td>Nama Anggota</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Foto</td>
            <td>Menu</td>
        </tr>
    
        <?php
        include_once 'koneksi.php';

        $query = "SELECT * FROM anggota";
        $data_anggota = mysqli_query($koneksi, $query);

        $no = 1;
        foreach($data_anggota as $key => $value) {
            #code...

        ?>   
            <tr>
                <td><?= $no ?></td>
                <td><?= $value ['idanggota'] ?></td>
                <td><?= $value ['nama'] ?></td>
                <td><?= $value ['alamat'] ?></td>
                <td><?= $value ['jeniskelamin'] ?></td>
                <td><img src="public/<?=$value ['foto'] ?>" width="100"></td>
                <td>
                <div class="btn-group">
                    <a href="anggota_add.php?id=<?= $value['id']?>" class="btn btn-warning">Ubah</a>
                    <a href="anggota_act.php?id=<?= $value['id']?>" class="btn btn-danger"> Hapus</a>

                </div>
                </td>
            </tr>

            <?php
                $no++;
        }
        ?>
    
        </table>
    </div>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>

