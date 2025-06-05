<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>

    <?php
        $sisi_panjang = $_POST['sisi_panjang'];
        $sisi_pendek = $_POST['sisi_pendek'];
        $diagonal1 = $_POST['diagonal1'];
        $diagonal2 = $_POST['diagonal2'];
        $luas = 0.5 * $diagonal1 * $diagonal2; 
        $keliling = 2 * ($sisi_pendek + $sisi_panjang); 
        $keduanya = $_POST['pa'];
    ?>

    <a href="index.php">Home</a>
    <h1>Layang Layang</h1>
    <?php 
        if ($keduanya=="keliling") {
            echo "<h4>Keliling = 2 x (sisi pendek + sisi panjang) = $keliling </h4>";
        } elseif ($keduanya=="luas") {
            echo "<h4>Luas = 0.5 x diagonal 1 x diagonal 2 = $luas </h4>";
        } else { 
            echo "<h4>Keliling = 2 x (sisi pendek + sisi panjang) = $keliling </h4>";
            echo "<h4>Luas = 0.5 x diagonal 1 x diagonal 2 = $luas </h4>";
        }
    ?>

    <img src="layanglayang.jpg" alt="" width="400">
</body>
</html>