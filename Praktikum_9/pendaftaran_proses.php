<?php
    // Array untuk konversi angka bulan ke nama bulan
    $namaBulan = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni',
        7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
    
    // Ambil data dari POST dan bersihkan dari whitespace
    $namaLengkap = trim($_POST['nama']);
    $tempatLahir = $_POST['tempatLahir'];
    $tanggal = $_POST['tanggal'];
    $bulanAngka = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $alamatRumah = $_POST['alamat'];
    $jenisKelamin = $_POST['jk'];
    $asalSekolah = $_POST['asalSekolah'];
    $nilaiUAN = $_POST['nilaiUan'];

    // Format tanggal lahir
    $bulanNama = $namaBulan[(int)$bulanAngka];
    $tanggalLahirLengkap = $tanggal . " " . $bulanNama . " " . $tahun;
?>

<html>
<head>
    <title>Hasil Pendaftaran</title>
    <style>
        table { border-collapse: collapse; }
        td { padding: 5px; }
        .label-output { font-weight: bold; width: 200px; }
    </style>
</head>
<body>
    <?php
        echo "<h1>Terimakasih **" . $namaLengkap . "** sudah mengisi form pendaftaran.</h1>";
        
        echo "<h2>Data Pendaftaran Anda:</h2>";
        echo "<table>";
        echo "<tr><td class='label-output'>Nama Lengkap</td><td>:</td><td>" . $namaLengkap . "</td></tr>";
        echo "<tr><td class='label-output'>Tempat Lahir</td><td>:</td><td>" . $tempatLahir . "</td></tr>";
        echo "<tr><td class='label-output'>Tanggal Lahir</td><td>:</td><td>" . $tanggalLahirLengkap . "</td></tr>";
        echo "<tr><td class='label-output'>Alamat Rumah</td><td>:</td><td>" . nl2br($alamatRumah) . "</td></tr>"; // nl2br untuk menjaga format baris baru
        echo "<tr><td class='label-output'>Jenis Kelamin</td><td>:</td><td>" . $jenisKelamin . "</td></tr>";
        echo "<tr><td class='label-output'>Asal Sekolah</td><td>:</td><td>" . $asalSekolah . "</td></tr>";
        echo "<tr><td class='label-output'>Nilai UAN</td><td>:</td><td>" . $nilaiUAN . "</td></tr>";
        echo "</table>";
    ?>
    <br>
    <a href="pendaftaran_form.php">Kembali ke Form</a>
</body>
</html>