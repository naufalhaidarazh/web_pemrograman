<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>

    <?php
        $alasa = 10;
        $alasb = 20;
        $sisic = 6;
        $sisid = 8;
        $tinggi = 12;
        $luas = 0.5 * ($alasa + $alasb) * $tinggi; 
        $keliling = $alasa + $alasb + $sisic + $sisid; 
    ?>

    <a href="index.php">Home</a>
    <h1>Trapesium</h1>

    <h4>Luas = 0.5 x (alas a + alas b) x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c + sisi d = <?php echo $keliling ?></h4>
</body>
</html>