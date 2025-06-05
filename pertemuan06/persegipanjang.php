<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>

    <!-- <?php
        $panjang = 19;
        $lebar = 10;
        $luas = $panjang * $lebar; 
        $keliling = 2 * ($panjang + $lebar); 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>

    <form action="persegipanjangaction.php" method="POST">
        <table>
            <tr>
                <td>Masukan panjang</td>
                <td>:</td>
                <td><input type="number" name="panjang" id=""></td>
            </tr>
            <tr>
                <td>Masukan lebar</td>
                <td>:</td>
                <td><input type="number" name="lebar" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- <h4>Luas = panjang x lebar = <?php echo $luas ?></h4>
    <h4>Keliling = 2 x (panjang + lebar) = <?php echo $keliling ?></h4> -->
</body>
</html>