<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="tugas_proses.php" method="post">
    <fieldset>
    <legend>Form Pembelian</legend>
    <table>
    <tr>
    <td> <label for=" ">Nama </label></td>
    <td><input type="text" name="nama" id="" placeholder="nama.."></td>
    </tr>
    <tr>
    <td><label for="">Alamat </label></td>
    <td><input type="text" name="jl_kp" placeholder="Jalan/KP..">
    <input type="text" name="kec" placeholder="Kecamatan..">
    <input type="text" name="kota" placeholder="Kota..">
    <input type="text" name="provinsi" placeholder="Provinsi.."></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="number" name="kd" placeholder="Kode Pos..">    </td>
    </tr>
    <tr>
    <td><label for=" ">Nama Barang </label></td>
    <td><input type="text" name="nb" placeholder="nama barang.." ></td>
    </tr>
    <tr>
    <td><label for=" ">Harga Barang </label></td>
    <td><input type="number" name="hb" placeholder="Harga barang.." ></td>
    </tr>
    <tr>
    <td><label for=" ">Jumlah Barang </label></td>
    <td><input type="number" name="jb" placeholder="Jumlah barang.." ></td>
    </tr>
    <tr>
    <td><label for="">Deskripsi </label></td>
    <td><textarea name="desk" placeholder="deskripsi.." cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
    <td><label for="">Tanggal Pembelian </label></td>
    <td><input type="date" name="tp"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="kirim" value="kirim"></td>
    </tr>
    </table>    
    </fieldset>
    </form>
</body>
</html>