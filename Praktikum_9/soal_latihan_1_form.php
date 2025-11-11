<html>
<head>
    <title>Input Perhitungan Saldo Tabungan</title>
</head>
<body>
    <h1>Perhitungan Saldo Tabungan</h1>
    <form method="post" action="soal_latihan_1_proses.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp)</td>
                <td>:</td>
                <td><input type="number" name="saldoAwal" required></td>
            </tr>
            <tr>
                <td>Bunga per Bulan (%)</td>
                <td>:</td>
                <td><input type="number" name="bungaPersen" step="0.01" required></td>
            </tr>
            <tr>
                <td>Lama Menabung (Bulan)</td>
                <td>:</td>
                <td><input type="number" name="bulan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Saldo">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>