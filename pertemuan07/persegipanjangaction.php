<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>

    <?php
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar; 
        $keliling = 2 * ($panjang + $lebar); 
        $keduanya = $_POST['pa'];
    ?>

    <a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>
    <?php 
        if ($keduanya=="keliling") {
            echo "<h4>Keliling = 2 x (panjang + lebar) = $keliling </h4>";
        } elseif ($keduanya=="luas") {
            echo "<h4>Luas = panjang x lebar = $luas </h4>";
        } else { 
            echo "<h4>Keliling = 2 x (panjang + lebar) = $keliling </h4>";
            echo "<h4>Luas = panjang x lebar = $luas </h4>";
        }
    ?>

    <img src="persegipanjang.jpg" alt="" width="400">
</body>
</html>