<!DOCTYPE html>
<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
    <h2>Status Bilangan</h2>

    <?php
    $bilangan = $_POST["bil"];

    if ($bilangan > 0) {
        echo "Bilangan $bilangan adalah positif";
    } elseif ($bilangan < 0) {
        echo "Bilangan $bilangan adalah negatif";
    } else {
        echo "Bilangan $bilangan adalah nol";
    }
    
    // cara ke - 2

    if ($bilangan > 0)
        $status = "positif";
    else
        if ($bilangan < 0)
            $status = "negatif";
        else
            $status = "nol";

    echo "<p>Bilangan ". $bilangan ." adalah bilangan ". $status ."</p>";
?>
</body>
</html>
