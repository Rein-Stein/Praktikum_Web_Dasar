<?php
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;

// Menghitung saldo akhir setelah 11 bulan
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ".";
?>
