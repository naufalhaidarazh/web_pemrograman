<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>

    <?php
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisib = $_POST['sisib'];
        $sisic = $_POST['sisic'];
        $luas = 0.5 * $alas * $tinggi; 
        $keliling = $alas + $sisib + $sisic; 
        $keduanya = $_POST['pa'];
    ?>

    <a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <?php 
        if ($keduanya=="keliling") {
            echo "<h4>Keliling = sisi a + sisi b + sisi c = $keliling </h4>";
        } elseif ($keduanya=="luas") {
            echo "<h4>Luas = 0.5 x alas x tinggi = $luas </h4>";
        } else { 
            echo "<h4>Keliling = sisi a + sisi b + sisi c = $keliling </h4>";
            echo "<h4>Luas = 0.5 x alas x tinggi = $luas </h4>";
        }
    ?>

    <img src="segitiga.jpg" alt="" width="400">
</body>
</html>