<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <!-- <?php
        $alasa = 19;
        $alasb = 10;
        $sisic = 20;
        $sisid = 30;
        $tinggi = 10;
        $luas = 0.5 * ($alasa + $alasb) * $tinggi; 
        $keliling = $alasa + $alasb + $sisic + $sisid; 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Trapesium</h1>

    <form action="trapesiumaction.php" method="POST">
        Masukan alas a (sisi a)
        <input type="number" name="alasa" id=""><br>
        Masukan alas b (sisi b)
        <input type="number" name="alasb" id=""><br>
        Masukan sisi c
        <input type="number" name="sisic" id=""><br>
        Masukan sisi d
        <input type="number" name="sisid" id=""><br>
        Masukan tinggi
        <input type="number" name="tinggi" id=""><br>
        <input type="submit" value="Hitung">
    </form>

    <!-- <h4>Luas = 0.5 x (alas a + alas b) x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c + sisi d = <?php echo $keliling ?></h4> -->
</body>
</html>