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
        <table>
            <tr>
                <td>Masukan sisi panjang</td>
                <td>:</td>
                <td><input type="number" name="sisi_panjang" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi pendek</td>
                <td>:</td>
                <td><input type="number" name="sisi_pendek" id=""></td>
            </tr>
            <tr>
                <td>Masukan diagonal 1</td>
                <td>:</td>
                <td><input type="number" name="diagonal1" id=""></td>
            </tr>
            <tr>
                <td>Masukan diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="diagonal2" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- <h4>Luas = 0.5 x diagonal 1 x diagonal 2 = <?php echo $luas ?></h4>
    <h4>Keliling = 2 x (sisi pendek + sisi panjang) = <?php echo $keliling ?></h4> -->
</body>
</html>