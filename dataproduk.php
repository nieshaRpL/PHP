<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>

    </form>
    <?php
$dataProduk = array(
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);

foreach ($dataProduk as $produk) {
    echo "<tr>";
    echo "<td>" . $produk[0] . "</td>"."<br>";
    echo "<td>" . $produk[1] . "</td>"."<br>"; 
    echo "<td>" . number_format($produk[2], 0, ',', '.') . "</td>"."<br>"; 
    echo "<td>" . ($produk[3] ? "Tersedia" : "Habis") . "</td>"; 
    echo "</tr>";
}

?>
</body>
</html>
