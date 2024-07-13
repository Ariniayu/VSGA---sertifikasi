<?php
session_start();
$_SESSION['sesi']= null;
echo "<script> alret('Anda gagal login!');</script>";
        echo '<meta http-equiv="refersh" content="0; url=index.php">';