<?php
if (isset($_POST['kirim'])) {
    $saran = $_POST['saran'];
    echo "Kritik / saran anda : <br>";
    echo "<font color=blue><b>$saran</b></font>";
}