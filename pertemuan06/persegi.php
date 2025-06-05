<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>

    <!-- <?php
        $sisi = 10;
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi; 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Persegi</h1>

    <form action="persegiaction.php" method="POST">
        <table>
            <tr>
                <td>Masukan sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- <h4>Luas = sisi x sisi = <?php echo $luas ?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling ?></h4> -->
</body>
</html>