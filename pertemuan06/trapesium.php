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
        <table>
            <tr>
                <td>Masukan alas a (sisi a)</td>
                <td>:</td>
                <td><input type="number" name="alasa" id=""></td>
            </tr>
            <tr>
                <td>Masukan alas b (sisi b)</td>
                <td>:</td>
                <td><input type="number" name="alasb" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi c</td>
                <td>:</td>
                <td><input type="number" name="sisic" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi d</td>
                <td>:</td>
                <td><input type="number" name="sisid" id=""></td>
            </tr>
            <tr>
                <td>Masukan tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- <h4>Luas = 0.5 x (alas a + alas b) x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = sisi a + sisi b + sisi c + sisi d = <?php echo $keliling ?></h4> -->
</body>
</html>