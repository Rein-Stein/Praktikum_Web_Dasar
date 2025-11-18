<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
<h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

<?php
$bilangan1 = $_POST['bil1'];   // membaca input bilangan pertama
$bilangan2 = $_POST['bil2'];   // membaca input bilangan kedua
$bilangan3 = $_POST['bil3'];   // membaca input bilangan ketiga

// cara 1 - mencari bilangan yang terbesar dari bil 1 dan bil 2
// dibandingkan dengan bilangan 3 menggunakan nested if
// misal a = bil1, b = bil2, c = bil3
// a adalah max dari bilangan1 dan bilangan2
// jika bil1 > bil2 maka max = bil1, jika tidak max = bil2
// kemudian dibandingkan dengan bilangan3

if ($bilangan1 > $bilangan2) {
    $sementara = $bilangan1;
}
else {
    $sementara = $bilangan2;
}

if ($sementara > $bilangan3) {
    $maksimum = $sementara;
    echo "Maksimum dari : $bilangan1, $bilangan2, dan $bilangan3 adalah : " . $maksimum . ".<br />";
}
else {
    $maksimum = $bilangan3;
    echo "Maksimum dari : $bilangan1, $bilangan2, dan $bilangan3 adalah : " . $maksimum . ".<br />";
}

// cara 2 - lebih langsung untuk mencari bilangan yang paling besar
// mengecek bilangan 1, 2, dan 3
// menggunakan nested if

if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
    $maksimum2 = $bilangan1;
}
else if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
    $maksimum2 = $bilangan2;
}
else {
    $maksimum2 = $bilangan3;
}

echo "Maksimum lagi dari : $bilangan1, $bilangan2, dan $bilangan3 adalah : " . $maksimum2 . ".<br />";

// cara ke – 3
// idenya hampir sama dengan cara ke-1, tapi tidak dengan mencari max sementara.

if ($bilangan1 > $bilangan2)
{
    if ($bilangan1 > $bilangan3)
        $maxAkhir = $bilangan1;
    else
        $maxAkhir = $bilangan3;
}
else
{
    if ($bilangan2 > $bilangan3)
        $maxAkhir = $bilangan2;
    else
        $maxAkhir = $bilangan3;
}

echo "<p>Nilai maksimum dari : " . $bilangan1 . ", " . $bilangan2 . ", dan " . $bilangan3 . " adalah : " . $maxAkhir . ".</p>";
?>
</body>
</html>

