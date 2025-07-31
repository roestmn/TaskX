<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator penjumlahan</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="POST">
        <input type="number" name="angka1">
        <br>
        <input type="number" name="angka2">
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 + $angka2;
        echo "<h2>Hasil: $angka1 + $angka2 = $hasil</h2>";
    }
    ?>
</body>
</html>
