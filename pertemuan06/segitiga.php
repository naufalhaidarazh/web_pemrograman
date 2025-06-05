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
        <table>
            <tr>
                <td>Masukan alas (sisi a)</td>
                <td>:</td>
                <td><input type="number" name="alas" id=""></td>
            </tr>
            <tr>
                <td>Masukan tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi b</td>
                <td>:</td>
                <td><input type="number" name="sisib" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi c</td>
                <td>:</td>
                <td><input type="number" name="sisic" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- <h4>Luas = 0.5 x alas x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c = <?php echo $keliling ?></h4> -->
</body>
</html>