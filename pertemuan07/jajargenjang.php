<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>

    <!-- <?php
        $alas = 7;
        $tinggi = 4;
        $sisi_miring = 5;
        $luas = $alas * $tinggi; 
        $keliling = 2 * ($alas + $sisi_miring); 
    ?> -->

    <a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>

    <form action="jajargenjangaction.php" method="POST">
        <table>
            <tr>
                <td>Masukan alas</td>
                <td>:</td>
                <td><input type="number" name="alas" id=""></td>
            </tr>
            <tr>
                <td>Masukan tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
            <tr>
                <td>Masukan sisi miring</td>
                <td>:</td>
                <td><input type="number" name="sisi_miring" id=""></td>
            </tr>
            <tr>
                <td>Pilih Aksi</td>
                <td>:</td>
                <td>
                    <input type="radio" name="pa" id="pkeliling" value="keliling" required>
                    <label for="pkeliling">Keliling</label><br>
                    <input type="radio" name="pa" id="pluas" value="luas" required>
                    <label for="pluas">Luas</label><br>
                    <input type="radio" name="pa" id="psemua" value="semua" required>
                    <label for="psemua">Keliling dan Luas</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
        
    </form>

    <!-- <h4>Luas = alas x tinggi = <?php echo $luas ?></h4>
    <h4>Keliling = 2 x (alas + sisi miring) = <?php echo $keliling ?></h4> -->
</body>
</html>