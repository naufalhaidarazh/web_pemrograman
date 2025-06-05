<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>

    <?php
        $sisi = $_POST['sisi'];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi; 
        $keduanya = $_POST['pa'];
    ?>

    <a href="index.php">Home</a>
    <h1>Persegi</h1>
    <?php 
        if ($keduanya=="keliling") {
            echo "<h4>Keliling = 4 x sisi = $keliling </h4>";
        } elseif ($keduanya=="luas") {
            echo "<h4>Luas = sisi x sisi = $luas </h4>";
        } else { 
            echo "<h4>Keliling = 4 x sisi = $keliling </h4>";
            echo "<h4>Luas = sisi x sisi = $luas </h4>";
        }
    ?>

    <img src="persegi.jpg" alt="" width="400">
</body>
</html>