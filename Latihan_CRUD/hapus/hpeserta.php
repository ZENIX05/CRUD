<?php

$a = $_GET['id_peserta'];

include "../koneksi.php";
$sql = "DELETE FROM kotak WHERE id_peserta='$a'";
$query = mysqli_query($koneksi,$sql);
    header("location:../index.php");
?>