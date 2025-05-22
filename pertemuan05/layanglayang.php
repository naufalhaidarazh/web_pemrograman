<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>

    <!-- <?php
        $sisi_panjang = 7;
        $sisi_pendek = 5;
        $diagonal1 = 10;
        $diagonal2 = 6;
        $luas = 0.5 * $diagonal1 * $diagonal2; 
        $keliling = 2 * ($sisi_pendek + $sisi_panjang); 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Layang Layang</h1>

    <form action="layanglayangaction.php" method="POST">
        Masukan sisi panjang
        <input type="number" name="sisi_panjang" id=""><br>
        Masukan sisi pendek
        <input type="number" name="sisi_pendek" id=""><br>
        Masukan diagonal 1
        <input type="number" name="diagonal1" id=""><br>
        Masukan diagonal 2
        <input type="number" name="diagonal2" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = 0.5 x diagonal 1 x diagonal 2 = <?php echo $luas ?></h4>
    <h4>Keliling = 2 x (sisi pendek + sisi panjang) = <?php echo $keliling ?></h4> -->
</body>
</html>