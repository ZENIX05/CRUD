<?php
$g ;
if ($_FILES['foto']['name'] == ''){
    $g = $_POST['ya'];
}else{
    $g = $_FILES['foto'] ['name'];
}
$a = $_GET['id_peserta'];
$b = $_POST['nama'];
$direction = $_FILES['foto']['tmp_name'];

include "../koneksi.php";
$sql = "UPDATE kotak SET foto = '$g', nama = '$b'  WHERE id_peserta='$a'";
$query = mysqli_query($koneksi,$sql);
move_uploaded_file($direction,'../assets/'.$g);
header("location:../index.php");

?>              