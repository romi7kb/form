<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    if ($password == '123' && $email=='romiramdhani84@gmail.com') {
        $status = 'Aktif';
    }else {
        $status = 'Tidak Aktif';
    }
    echo "Nama : $nama<br>
          Alamat : $alamat<br>
          Jenis Kelamin : $jk<br>
          Agama : $agama<br>
          Email : $email<br>
          Status Akun : $status
    ";
}