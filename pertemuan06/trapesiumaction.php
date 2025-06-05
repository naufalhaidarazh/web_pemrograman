<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
        $alasa = $_POST['alasa'];
        $alasb = $_POST['alasb'];
        $sisic = $_POST['sisic'];
        $sisid = $_POST['sisid'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * ($alasa + $alasb) * $tinggi; 
        $keliling = $alasa + $alasb + $sisic + $sisid; 
    ?>

    <a href="index.php">Home</a>
    <h1>Trapesium</h1>

    <h4>Luas = 0.5 x (alas a + alas b) x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c + sisi d = <?php echo $keliling ?></h4>

    <img src="trapesium.jpg" alt="" width="400">
</body>
</html>