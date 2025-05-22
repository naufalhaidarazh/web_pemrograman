<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>

    <!-- <?php
        $jari_jari = 100;
        $phi = 3.14;
        $luas = 2 * $phi * $jari_jari; 
        $keliling = $phi * $jari_jari * $jari_jari; 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Lingkaran</h1>

    <form action="lingkaranaction.php" method="POST">
        Masukan jari jari
        <input type="number" name="jari_jari" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = 2 x π(3,14) x jari-jari = <?php echo $luas ?></h4>
    <h4>Keliling = π(3,14) x jari-jari x jari-jari = <?php echo $keliling ?></h4> -->
</body>
</html>