<?php
if (isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "Film kartun Favorit anda : 
          <font color=blue><b>$film</b></font>";

}