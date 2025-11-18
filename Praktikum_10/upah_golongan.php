<?php
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jam = floatval($_POST['jam']);
    $gol = $_POST['gol'];

    // daftar upah per golongan
    $upah_gol = [
        "A" => 4000,
        "B" => 5000,
        "C" => 6000,
        "D" => 7500
    ];

    $upah_normal = $upah_gol[$gol]; 
    $upah_lembur = 3000;
    $batas_normal = 48;

    if ($jam <= $batas_normal) {
        $jam_normal = $jam;
        $jam_lembur = 0;
    } else {
        $jam_normal = $batas_normal;
        $jam_lembur = $jam - $batas_normal;
    }

    $total_normal = $jam_normal * $upah_normal;
    $total_lembur = $jam_lembur * $upah_lembur;
    $total = $total_normal + $total_lembur;

    function rp($x) { return "Rp " . number_format($x, 0, ',', '.'); }

    $hasil = "
        Golongan: $gol<br>
        Jam normal: $jam_normal<br>
        Jam lembur: $jam_lembur<br>
        Upah normal: " . rp($total_normal) . "<br>
        Upah lembur: " . rp($total_lembur) . "<br>
        <strong>Total upah: " . rp($total) . "</strong>
    ";
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Upah Golongan</title></head>
<body>
<h2>Hitung Upah Berdasarkan Golongan</h2>

<form method="post">
    Jumlah jam kerja: <input type="number" name="jam" step="0.5" required><br><br>
    Golongan:
    <select name="gol" required>
        <option value="A">A (Rp 4.000)</option>
        <option value="B">B (Rp 5.000)</option>
        <option value="C">C (Rp 6.000)</option>
        <option value="D">D (Rp 7.500)</option>
    </select>
    <br><br>
    <button type="submit">Hitung</button>
</form>

<?php if ($hasil) echo "<p>$hasil</p>"; ?>

</body>
</html>
