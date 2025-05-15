<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu Tugas PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Menu Tugas PHP</h2>
    <ul>
        <li><a href="?menu=1">1. Jenis Kendaraan (Switch)</a></li>
        <li><a href="?menu=2">2. Bilangan Genap (For)</a></li>
        <li><a href="?menu=3">3. Daftar Hewan (Foreach)</a></li>
        <li><a href="?menu=4">4. Cek Ganjil / Genap (Ternary)</a></li>
    </ul>
    <div>
        <?php
        switch ($menu) {
            case '1':
                include 'nomor1.php';
                break;
            case '2':
                include 'nomor2.php';
                break;
            case '3':
                include 'nomor3.php';
                break;
            case '4':
                include 'nomor4.php';
                break;
            default:
                echo "<p>Silakan pilih salah satu menu di atas.</p>";
        }
        ?>
    </div>
</body>
</html>
