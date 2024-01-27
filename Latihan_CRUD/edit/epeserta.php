<?php
$id_peserta = $_GET['id_peserta'];
include '../koneksi.php';
$sql = "SELECT * FROM kotak where id_peserta = '$id_peserta'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>edit peserta</title>
</head>

<body class="bg-secondary">
    <div class="container mp-3 p-3">
        <h4>Halaman EDIT Peserta.</h4>
        <a href="../index.php" class="btn btn-primary"> KEMBALI</a>
        <hr>
        <form method="post" action="pepeserta.php?id_peserta=<?= $data['id_peserta']; ?>" enctype="multipart/form-data">
            <div class="form-group mb-2">
                <label>Nama</label>
                <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label>foto</label>
                <input value="<?= $data['foto'] ?>" type="file" name="foto" class="form-control" >
            </div>  
            <div class="form-group mb-2">
                <input type="hidden" name="id_peserta" value="<?= $data['id_peserta'] ?>">
                <input type="hidden" name="ya" value="<?= $data['foto'] ?>">
                <button type="submit" class="btn btn-primary" name="edi">SIMPAN</button>
            </div>
        </form>
    </div>

</body>

</html>