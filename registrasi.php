<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registrasi</title>
</head>
<body>
<form action="proresistrasi.php" method="post">
<fieldset>
    <legend><h3>registrasi</h3></legend>
    Nama : <input type="text" name="nama" id=""><br>
    Password : <input type="password" name="password" id=""><br>
    Alamat : <input type="text" name="alamat" id=""><br>
    Jenis kelamin : 
    <input type="radio" name="jk" value="laki-laki" checked>laki-laki
    <input type="radio" name="jk" value="perempuan">perempuan<br>
    Agama<br>
    <select name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
    </select><br>
    Email <input type="text" name="email" id=""><br>
    <input type="submit" name="input" value="input">
    <input type="reset" value="reset">
</fieldset>
</form>
</body>
</html>