<?php
// tahun.php
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tahun = intval($_POST['tahun'] ?? 0);

    if ($tahun <= 0) {
        $hasil = "Masukkan tahun yang valid (misal: 2024).";
    } else {
        // tahun kabisat: (kabisat jika habis dibagi 400) atau (habis dibagi 4 tapi tidak habis dibagi 100)
        if ( ($tahun % 400) === 0 || ( ($tahun % 4) === 0 && ($tahun % 100) !== 0 ) ) {
            $hasil = "Tahun {$tahun} adalah <strong>TAHUN KABISAT</strong>.";
        } else {
            $hasil = "Tahun {$tahun} <strong>bukan</strong> tahun kabisat.";
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Cek Tahun Kabisat</title>
</head>
<body>
  <h2>Cek Tahun Kabisat</h2>
  <form method="post" action="">
    <label>Masukkan tahun:
      <input type="number" name="tahun" required placeholder="misal: 2024">
    </label>
    <button type="submit">Cek</button>
  </form>

  <?php if ($hasil !== ""): ?>
    <p><?php echo $hasil; ?></p>
  <?php endif; ?>
</body>
</html>
