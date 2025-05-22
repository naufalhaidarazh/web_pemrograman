<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>

    <!-- <?php
        $sisi = 5;
        $diagonal1 = 6;
        $diagonal2 = 8;
        $luas = 0.5 * $diagonal1 * $diagonal2; 
        $keliling = 4 * $sisi; 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>

    <form action="belahketupataction.php" method="POST">
        Masukan sisi
        <input type="number" name="sisi" id=""><br>
        Masukan diagonal 1
        <input type="number" name="diagonal1" id=""><br>
        Masukan diagonal 2
        <input type="number" name="diagonal2" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = 0.5 x diagonal 1 x diagonal 2 = <?php echo $luas ?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling ?></h4> -->
</body>
</html>