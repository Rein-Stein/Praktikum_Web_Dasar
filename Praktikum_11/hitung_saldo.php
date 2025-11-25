<?php
$saldo = $_POST['saldo'];
$n = $_POST['bulan'];

$bulan = 1;

while ($bulan <= $n) {

    // Tentukan bunga berdasarkan saldo terakhir
    if ($saldo < 1100000) {
        $bunga = 0.03 * $saldo;
    } else {
        $bunga = 0.04 * $saldo;
    }

    // Hitung saldo akhir bulan ini
    $saldo = $saldo + $bunga - 9000; // biaya admin

    $bulan++;
}

echo "Saldo akhir setelah $n bulan adalah Rp. " . number_format($saldo, 0, ',', '.');
?>
