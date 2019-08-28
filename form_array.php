<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Array</title>
</head>
<body>
    <center>From Array</center>
    <fieldset>
    <legend>From Array</legend>
    <form action="" method="get">
    <label for="">Masukan jumlah form</label>
    <input type="number" min="1" name="jml" id="" required><br>
    <input type="submit" name="sbb" value="buat">
    <hr>
    </form>
    <?php
    if (isset($_GET['sbb'])) :
        for ($i=0; $i < $_GET['jml'] ; $i++) : 
    ?>        
    <form action="fa.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama[]" id="" required>
    <label for="">Kelas</label>
    <input type="text" name="kelas[]" id="" required><br>
    <hr>
        <?php  endfor;?>
    <input type="submit" name="sbm" value="simpan">
    <input type="reset" value="Reset">
    <?php
    endif;
    ?>
    </form>
    </fieldset>
</body>
</html>
