<?php
include "koneksi.php";



if(@$_POST['idanggota']) {

//data ambil dari form
$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];

$foto = (@$_POST['foto_lama']) ?: '';
if (@$_FILES['foto']['tmp_name']) {

    //ambil nama file foto
    $foto = $_FILES['foto']['name'];


    //perinttah upload ke directory
    move_uploaded_file($_FILES['foto']['tmp_name'], 'public/' . $_FILES ["foto"]["name"]);
}
echo $_POST['id'];
if (@$_POST['id']) {
    $id = $_POST['id'];

    //query ubah data ke tabel anggota
    $query = "UPDATE anggota SET 
                idanggota = '$idanggota', 
                nama = '$nama', 
                jeniskelamin = '$jeniskelamin', 
                alamat = '$alamat', 
                foto = '$foto'
                WHERE id = '$id'";
}
else {
    $query = "INSERT INTO anggota (idanggota,nama, jeniskelamin, alamat, foto) 
    VALUES ( '$idanggota','$nama', '$jeniskelamin', '$alamat', '$foto')";  
}


}



// fungsi hapus data
if (@$_GET['id']) {
    $id = $_GET['id'];
    $query = "DELETE FROM anggota WHERE id = '$id'";
}


$result = mysqli_query($koneksi, $query) or die (mysqli_error ($koneksi));

if($result){
    header('Location: anggota_read.php');
}
/*
// funggsi Insert  
if (@$_POST) {

if(@$_POST){
    $idanggota = $_POST['idanggota'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $foto = null;
    if(@$_FILES['foto']['tmp_name']){
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $dir = "public";
        move_uploaded_file($tmp, $dir."/".$foto);
    } */

/*
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: anggota_read.php");
} */


    /*
    $tmp = $_FILES['foto']['tmp_name'];
    $dir = "public"; 
     move_uploaded_file($tmp, $dir . "/" . $foto);*/
?>

