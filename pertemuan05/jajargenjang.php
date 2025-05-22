<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>

    <!-- <?php
        $alas = 7;
        $tinggi = 4;
        $sisi_miring = 5;
        $luas = $alas * $tinggi; 
        $keliling = 2 * ($alas + $sisi_miring); 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>

    <form action="jajargenjangaction.php" method="POST">
        Masukan alas
        <input type="number" name="alas" id=""><br>
        Masukan tinggi
        <input type="number" name="tinggi" id=""><br>
        Masukan sisi miring
        <input type="number" name="sisi_miring" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = alas x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = 2 x (alas + sisi miring) = <?php echo $keliling ?></h4> -->
</body>
</html>