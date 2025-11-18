<?php
$hasil = "";
$bulan = date("n"); // bulan sekarang (1–12)

switch ($bulan) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        $hasil = "Bulan ini mempunyai 31 hari.";
        break;

    case 4: case 6: case 9: case 11:
        $hasil = "Bulan ini mempunyai 30 hari.";
        break;

    case 2:
        $hasil = "Bulan Februari bisa 28 atau 29 hari (tergantung tahun kabisat).";
        break;

    default:
        $hasil = "Bulan tidak valid.";
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Jumlah Hari per Bulan</title></head>
<body>
<h2>Jumlah Hari dalam Bulan Ini</h2>

<p>Bulan sekarang: <strong><?php echo date("F"); ?></strong></p>
<p><?php echo $hasil; ?></p>

</body>
</html>
