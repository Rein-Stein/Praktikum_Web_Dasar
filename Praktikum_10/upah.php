<?php
// upah.php
$pesan = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // ambil input dan bersihkan
    $jam = floatval($_POST['jam'] ?? 0);

    if ($jam < 0) {
        $pesan = "Masukkan jumlah jam yang valid.";
    } else {
        $upah_normal_per_jam = 2000;
        $upah_lembur_per_jam = 3000;
        $batas_normal = 48;

        if ($jam <= $batas_normal) {
            $jam_normal = $jam;
            $jam_lembur = 0;
        } else {
            $jam_normal = $batas_normal;
            $jam_lembur = $jam - $batas_normal;
        }

        $gaji_normal = $jam_normal * $upah_normal_per_jam;
        $gaji_lembur = $jam_lembur * $upah_lembur_per_jam;
        $total = $gaji_normal + $gaji_lembur;

        // format ke rupiah sederhana
        function rupiah($angka) {
            return "Rp " . number_format($angka, 0, ",", ".");
        }

        $pesan = "<strong>Ringkasan:</strong><br>";
        $pesan .= "Jam kerja normal: {$jam_normal} jam<br>";
        $pesan .= "Jam lembur: {$jam_lembur} jam<br>";
        $pesan .= "Upah normal: " . rupiah($gaji_normal) . "<br>";
        $pesan .= "Upah lembur: " . rupiah($gaji_lembur) . "<br>";
        $pesan .= "<strong>Total diterima: " . rupiah($total) . "</strong>";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hitung Upah Karyawan</title>
</head>
<body>
  <h2>Hitung Upah Karyawan Honorer</h2>
  <form method="post" action="">
    <label>Jumlah jam kerja per minggu:
      <input type="number" step="0.5" name="jam" required placeholder="misal: 50">
    </label>
    <button type="submit">Hitung</button>
  </form>

  <?php if ($pesan !== ""): ?>
    <div style="margin-top:1rem;"><?php echo $pesan; ?></div>
  <?php endif; ?>
</body>
</html>
