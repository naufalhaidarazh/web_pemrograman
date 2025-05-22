<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>

    <?php
        $alas = 20;
        $tinggi = 6;
        $sisib = 10;
        $sisic = 10;
        $luas = $alas * $tinggi; 
        $keliling = $alas + $sisib + $sisic; 
    ?>

    <a href="index.php">Home</a>
    <h1>Segitiga</h1>

    <h4>Luas = panjang x lebar = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c  = <?php echo $keliling ?></h4>
</body>
</html>