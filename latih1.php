<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="POST">
    <label>Nama :</label>
    <input type="text" name="nama" require><br>
    <label>Nilai 1 :</label>
    <input type="number" name="nilai1" require><br>
    <label>Nilai 2 :</label>
    <input type="number" name="nilai2" require><br>
    <input type="submit" name="input" value="Simpan">
    <input type="reset" value="Reset">
    </label>
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $n1 = $_POST['nilai1'];
    $n2 = $_POST['nilai2'];
    $ra = ($n1+$n2)/2;
    echo "Nama Anda : <b>$nama</b><br>";
    echo "Nilai 1 : <b>$n1</b><br>";
    echo "Nilai 2 : <b>$n2</b><br>";
    echo "Nilai Rata-rata : <b>$ra</b>";
}
?>