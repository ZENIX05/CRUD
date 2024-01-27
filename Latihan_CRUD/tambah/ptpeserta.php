<?php

include "../koneksi.php";
$a = $_POST["id_peserta"];
$b = $_POST["nama"];
$foto = $_FILES["foto"] ["name"];
$direction = $_FILES["foto"] ["tmp_name"];


$data = mysqli_query ($koneksi,"INSERT INTO kotak VALUES ('$a','$foto','$b')");
move_uploaded_file($direction,'../assets/'.$foto);
header('location:../index.php');



?>