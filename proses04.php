<?php
if (isset($_POST['input'])) {
    $nama1 =$_POST['nama1'];
    $nama2 =$_POST['nama2'];
    $nama3=$_POST['nama3'];
    $nama4=$_POST['nama4']; 
    echo "<b>Nama Sahabat-sahabat dekatmu</b><br>";
    echo "$nama1<br>
          $nama2<br>
          $nama3<br>
          $nama4";
}