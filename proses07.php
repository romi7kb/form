<?php
if (isset($_POST['pilih'])) {
    echo "Band Favorit anda Adalah : <br>";
    for ($i=1; $i <=4 ; $i++) { 
        if (isset($_POST['b'.$i])) {
            echo "+ ".$_POST['b'.$i]."<br>";
        }
    }
}