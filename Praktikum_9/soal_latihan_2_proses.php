<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Pecahan Uang Rupiah</h1>
    <?php
        // 1. Ambil data dari form
        $JumlahUang = $_POST['jumlahUang'];
        
        echo "<p>Jumlah uang yang ingin dipecah: **Rp. " . number_format($JumlahUang, 0, ',', '.') . "**</p>";
        echo "<h3>Hasil Pecahan:</h3>";

        // Daftar pecahan yang berlaku
        $pecahan = [100000, 50000, 20000, 5000, 100, 50];
        $sisa = $JumlahUang;

        echo "<table>";
        // Lakukan perhitungan untuk setiap pecahan
        foreach ($pecahan as $nilaiPecahan) {
            // Hitung berapa lembar pecahan saat ini ($a, $b, $c, d, e, f pada contoh soal)
            $jumlahLembar = floor($sisa / $nilaiPecahan);
            
            // Hitung sisa uang yang belum dipecah
            $sisa = $sisa % $nilaiPecahan;

            // Tampilkan hasil
            echo "<tr>";
            echo "<td>Jumlah Rp. " . number_format($nilaiPecahan, 0, ',', '.') . ",-</td>";
            echo "<td>:</td>";
            echo "<td><strong>" . $jumlahLembar . "</strong> lembar</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        // Tampilkan sisa yang tidak dapat dipecah
        if ($sisa > 0) {
            echo "<p style='color: red;'>Terdapat sisa uang sebesar Rp. " . $sisa . ",- yang tidak memiliki pecahan yang sesuai.</p>";
        }
    ?>
    <br>
    <a href="soal_latihan_2_form.php">Kembali ke Form Input</a>
</body>
</html>