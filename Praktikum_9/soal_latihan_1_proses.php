<html>
<head>
    <title>Hasil Perhitungan Saldo Tabungan</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Tabungan</h1>
    <?php
        // 1. Ambil data dari form
        $saldoAwal = $_POST['saldoAwal'];
        $bungaPersen = $_POST['bungaPersen'];
        $bulan = $_POST['bulan'];

        // 2. Konversi persentase bunga ke bentuk desimal
        // Contoh: Jika user input 0.25, maka $bunga = 0.0025
        $bunga = $bungaPersen / 100;

        // 3. Menghitung saldo akhir menggunakan rumus bunga majemuk
        // Rumus: Saldo Akhir = Saldo Awal * (1 + Bunga)^Bulan
        $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

        // 4. Menampilkan hasil
        echo "<table>";
        echo "<tr><td>Saldo Awal</td><td>:</td><td>Rp. " . number_format($saldoAwal, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Bunga per Bulan</td><td>:</td><td>" . $bungaPersen . " %</td></tr>";
        echo "<tr><td>Lama Menabung</td><td>:</td><td>" . $bulan . " Bulan</td></tr>";
        echo "<tr><td><strong>Saldo Akhir</strong></td><td>:</td><td><strong>Rp. " . number_format($saldoAkhir, 2, ',', '.') . "</strong></td></tr>";
        echo "</table>";
    ?>
    <br>
    <a href="soal_latihan_1_form.php">Kembali ke Form Input</a>
</body>
</html>