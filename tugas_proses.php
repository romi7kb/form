<?php
if (isset($_POST['kirim'])) {
    $nama=$_POST['nama'];
    $aj=$_POST['jl_kp'];
    $kec=$_POST['kec'];
    $kota=$_POST['kota'];
    $provinsi=$_POST['provinsi'];
    $kd=$_POST['kd'];
    $nb=$_POST['nb'];
    $hb=$_POST['hb'];
    $jb=$_POST['jb'];
    $desk=$_POST['desk'];
    $tp=$_POST['tp'];
    if ($jb<0) {
        echo "<h1>Pesanan Tidak bisa Diproses</h1>";
        die;
    }elseif ($jb>=10) {
        $dis=$hb*0.2;
    }elseif ($jb>=5) {
        $dis=$hb/10;
    }
    $to=($hb*$jb);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<table>
<tr>
<td>Nama</td>
<td><?=$nama?></td>
</tr>
<tr>
<td>Alamat </td>
<td><?=$aj?></td>
<td><?=$kec?></td>
<td><?=$kota?></td>
<td><?=$provinsi?></td>
</tr>
<tr>
<td>Kode Pos</td>
<td><?=$kd?></td>
</tr>
<tr>
<td>Nama Barang </td>
<td><?=$nb?></td>
</tr>
<tr>
<td>Harga Barang</td>
<td><?=$hb?></td>
</tr>
<tr>
<td>Jumlah Barang </td>
<td><?=$jb?></td>
</tr>
<tr>
<td>Jumlah Harga Barang</td>
<td><?=$to?></td>
</tr>
<tr>
<td>Diskon</td>
<td><?=$dis?></td>
</tr>
<tr>
<td>Deskripsi</td>
<td><?=$desk?></td>
</tr>
<tr>
<td>Tanggal Pembelian</td>
<td><?=$tp?></td>
</tr>
<tr>
<td>Total </td>
<td><?=($to-$dis)?></td>
</tr>
</table>
</fieldset>
</body>
</html>