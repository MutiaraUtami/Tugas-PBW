<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .box {
            border: 1px solid #000;
            padding: 20px;
            width: 400px;
            margin: 20px auto;
        }
        .title {
            font-size: 20px;
            font-weight: bold;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <div class="title">Perhitungan Total Pembelian (Dengan Array)</div>
    <hr>

    <form method="post">
        <label for="barang">Nama Barang:</label><br>
        <select name="barang" id="barang">
            <option value="Keyboard">Keyboard</option>
            <option value="Mouse">Mouse</option>
            <option value="Monitor">Monitor</option>
        </select><br><br>

        <label for="jumlah">Jumlah Beli:</label><br>
        <input type="number" name="jumlah" id="jumlah" min="1" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Data harga barang
        $harga_barang = array(
            "Keyboard" => 150000,
            "Mouse" => 75000,
            "Monitor" => 500000
        );

        // Tangkap inputan
        $nama_barang = $_POST["barang"];
        $jumlah_beli = (int) $_POST["jumlah"];

        // Konstanta Pajak
        define("PAJAK", 0.10);

        // Perhitungan
        $harga_satuan = $harga_barang[$nama_barang];
        $total_sebelum_pajak = $harga_satuan * $jumlah_beli;
        $pajak = $total_sebelum_pajak * PAJAK;
        $total_bayar = $total_sebelum_pajak + $pajak;

        echo "<br>";
        echo "<p>Nama Barang: $nama_barang</p>";
        echo "<p>Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "</p>";
        echo "<p>Jumlah Beli: $jumlah_beli</p>";
        echo "<p>Total Harga (Sebelum Pajak): Rp " . number_format($total_sebelum_pajak, 0, ',', '.') . "</p>";
        echo "<p>Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "</p>";
        echo "<p class='bold'>Total Bayar: <span class='bold'>Rp " . number_format($total_bayar, 0, ',', '.') . "</span></p>";
    }
    ?>
</div>

</body>
</html>
