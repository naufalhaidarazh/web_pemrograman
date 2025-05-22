<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>

    <!-- <?php
        $alas = 19;
        $tinggi = 10;
        $sisib = 10;
        $sisic = 10;
        $luas = 0.5 * $alas * $tinggi; 
        $keliling = $alaas + $sisib + $sisic; 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Segitiga</h1>

    <form action="segitigaaction.php" method="POST">
        Masukan alas (sisi a)
        <input type="number" name="alas" id=""><br>
        Masukan tinggi
        <input type="number" name="tinggi" id=""><br>
        Masukan sisi b
        <input type="number" name="sisib" id=""><br>
        Masukan sisi c
        <input type="number" name="sisic" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = 0.5 x alas x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c = <?php echo $keliling ?></h4> -->
</body>
</html>