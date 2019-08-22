<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="proformulir.php" method="post">
    <div class="form-group">
    <label for="nopendaftaran">No Pendaftaran</label>
    <input type="number" class="form-control" name="nopendaftaran" id="nopendaftaran">
    </div>
    <label for="nisn">NISN</label>
    <input type="number" class="form-control" name="nisn" id="">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" id="">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" name=""  id="" >
    <label for="asal_sekolah">Asal Sekolah</label>
    <input type="text" class="form-control" name="asal_sekolah" id="">
    <label for="jenis_kelamin">Jenis kelamin</label>
    <input type="radio" class="form-control" name="jenis_kelamin" value="Laki-laki" id="">Laki-laki
    <input type="radio" class="form-control" name="jenis_kelamin" value="Perempuan" id="">Perempuan
    <label for="defaultCheck1">Hobi</label>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" name="hobi" value="Belajar" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
    Belajar
  </label>
    <input type="checkbox" class="form-check-input" name="hobi" value="Main Game" id="defaultCheck2"><label class="form-check-label" for="defaultCheck2">
    Main Game
  </label>
    <input type="checkbox" class="form-check-input" name="hobi" value="Main Bola" id="defaultCheck3">
    <label class="form-check-label" for="defaultCheck3">
    Main Bola
  </label>
    <input type="checkbox" class="form-check-input" name="hobi" value="Mancing" id="defaultCheck4">
    <label class="form-check-label" for="defaultCheck4">
    Mancing
  </label>
    <input type="checkbox" class="form-check-input" name="hobi" value="Menggambar" id="defaultCheck5"><label class="form-check-label" for="defaultCheck5">
    Menggambar
  </label>
  </div>
    <label for="jurusan">Jurusan</label>
    <select class="form-control" name="jurusan" id="">
    <option value="Spongebob">RPL</option>
    <option value="Sinchan">TKRO</option>
    <option value="Conan">TBSM</option>
    </select>
    <label for="nama_ayah">Nama Ayah</label>
    <input type="text" class="form-control" name="nama_ayah" id="">
    <label for="Pekerejaan_ayah">Pekerejaan Ayah</label>
    <input type="text" class="form-control" name="Pekerejaan_ayah" id="">
    <label for="nama_ibu">Nama ibu</label>
    <input type="text" class="form-control" name="nama_ibu" id="">
    <label for="Pekerejaan_ibu">Pekerejaan ibu</label>
    <input type="text"  class="form-control" name="Pekerejaan_ibu" id="">
    <button type="submit" class="form-control" name="kirim" class="btn btn-primary">kirim</button>
    <button type="reset" class="btn btn-danger">reset</button>
    </form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>