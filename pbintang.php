<?php
if (isset($_POST['kirim'])) {
    for ($i=1; $i <= $_POST['bintang'] ; $i++) { 
        for ($j=$_POST['bintang']; $j >= $i; $j--) { 
            echo "&nbsp";
        }
        for ($k=1; $k<=$i; $k++) {             
            echo "*";
        }
        echo "<br>";
    }
    echo "jumlah baris bintang : ".$_POST['bintang'];
}