<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>

    <?php
        $sisi = $_POST['sisi'];
        $diagonal1 = $_POST['diagonal1'];
        $diagonal2 = $_POST['diagonal2'];
        $luas = 0.5 * $diagonal1 * $diagonal2; 
        $keliling = 4 * $sisi; 
        $keduanya = $_POST['pa'];
    ?>

    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>
    <?php 
        if ($keduanya=="keliling") {
            echo "<h4>Keliling = 4 x sisi = $keliling </h4>";
        } elseif ($keduanya=="luas") {
            echo "<h4>Luas = 0.5 x diagonal 1 x diagonal 2 = $luas </h4>";
        } else { 
            echo "<h4>Keliling = 4 x sisi = $keliling </h4>";
            echo "<h4>Luas = 0.5 x diagonal 1 x diagonal 2 = $luas </h4>";
        }
    ?> 

    <img src="belahketupat.jpg" alt="" width="400">
</body>
</html>