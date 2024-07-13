<?php
include "koneksi.php";

$id_buku = $_POST['id_buku'] ?? null;
$judul_buku = $_POST['judul_buku'] ?? null;
$isbn = $_POST['isbn'] ?? null;
$pengarang = $_POST['pengarang'] ?? null;
$penerbit = $_POST['penerbit'] ?? null;
$tahun = $_POST['tahun'] ?? null;

// Insert  
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id'])) {
    $query = "INSERT INTO buku (id_buku, judul_buku, isbn, pengarang, penerbit, tahun) VALUES ('$id_buku', '$judul_buku', '$isbn', '$pengarang', '$penerbit', '$tahun')";
}

// Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "UPDATE buku SET 
                id_buku = '$id_buku', 
                judul_buku = '$judul_buku', 
                isbn = '$isbn', 
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun = '$tahun'
              WHERE id_buku = '$id'";
}

// Delete
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM buku WHERE id_buku = '$id'";
}

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: buku-read.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
