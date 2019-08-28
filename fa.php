<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    foreach ($nama as $data =>$key) {
        echo "Nama Saya : ".$nama[$data]." - Kelas : ".$kelas[$data]."<hr>";
    }
}
?>