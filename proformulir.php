<?php
if (isset($_POST['kirim'])) {
    $tl=$_POST['tanggallahir'];
    echo '<h2 class="card-title">No Pendaftaran : '.$_POST['nopendaftaran'].'</h2>';
    echo '<p class="text-md-left">NISN : '.$_POST['nisn'].'</p>';
    echo '<p class="text-md-left">Nama : '.$_POST['nama'].'</p>';
    echo '<p class="text-md-left">Alamat : '.$_POST['alamat'].'</p>';
    echo '<p class="text-md-left">Tanggal Lahir : '.$tl.'</p>';
    echo '<p class="text-md-left">Asal Sekolah : '.$_POST['asal_sekolah'].'</p>';
    echo '<p class="text-md-left">Jenis Kelamin : '.$_POST['jk'].'</p>';
    echo '<p class="text-md-left">Agama : '.$_POST['agama'].'</p>';
    echo '<p class="text-md-left">Hobi :<br> ';
    for ($i=1; $i <=5 ; $i++) { 
        if (isset($_POST['hobi'.$i])) {
            echo $_POST['hobi'.$i]."<br>";
        }
    }
    echo "</p>";
    echo '<p class="text-md-left">Jurusan : '.$_POST['jurusan'].'</p>';
    echo '<p class="text-md-left">Nama Ayah : '.$_POST['nama_ayah'].'</p>';
    echo '<p class="text-md-left">Pekerjaan Ayah : '.$_POST['pekerjaan_ayah'].'</p>';
    echo '<p class="text-md-left">Nama Ibu : '.$_POST['nama_ibu'].'</p>';
    echo '<p class="text-md-left">Pekerjaan Ibu : '.$_POST['pekerjaan_ibu'].'</p>';
}
?>
