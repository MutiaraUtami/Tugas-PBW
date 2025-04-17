<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: maroon;
            margin: 0;
            padding: 0;
        }

        .box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            padding: 25px;
            max-width: 500px;
            margin: 50px auto;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            color: maroon;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        input[type="submit"] {
            background-color: maroon;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #8b0000;
        }

        .bold {
            font-weight: bold;
        }

        .result {
            margin-top: 25px;
            padding: 15px;
            background-color: #f7f7f7;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="box">
    <div class="title">Perhitungan Total Pembelian</div>

    <form method="post">
        <label for="barang">Nama Barang:</label>
        <select name="barang" id="barang">
            <option value="Keyboard" <?= (isset($_POST['barang']) && $_POST['barang'] == 'Keyboard') ? 'selected' : '' ?>>Keyboard</option>
            <option value="Mouse" <?= (isset($_POST['barang']) && $_POST['barang'] == 'Mouse') ? 'selected' : '' ?>>Mouse</option>
            <option value="Monitor" <?= (isset($_POST['barang']) && $_POST['barang'] == 'Monitor') ? 'selected' : '' ?>>Monitor</option>
        </select>

        <label for="jumlah">Jumlah Beli:</label>
        <input type="number" name="jumlah" id="jumlah" min="1" required value="<?= isset($_POST['jumlah']) ? htmlspecialchars($_POST['jumlah']) : '' ?>">

        <input type="submit" value="Hitung Total Bayar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $harga_barang = array(
            "Keyboard" => 150000,
            "Mouse" => 75000,
            "Monitor" => 500000
        );

        $nama_barang = $_POST["barang"];
        $jumlah_beli = (int) $_POST["jumlah"];

        define("PAJAK", 0.10);

        $harga_satuan = $harga_barang[$nama_barang];
        $total_sebelum_pajak = $harga_satuan * $jumlah_beli;
        $pajak = $total_sebelum_pajak * PAJAK;
        $total_bayar = $total_sebelum_pajak + $pajak;

        echo "<div class='result'>";
        echo "<p>Nama Barang: <span class='bold'>$nama_barang</span></p>";
        echo "<p>Harga Satuan: <span class='bold'>Rp " . number_format($harga_satuan, 0, ',', '.') . "</span></p>";
        echo "<p>Jumlah Beli: <span class='bold'>$jumlah_beli</span></p>";
        echo "<p>Total Sebelum Pajak: <span class='bold'>Rp " . number_format($total_sebelum_pajak, 0, ',', '.') . "</span></p>";
        echo "<p>Pajak (10%): <span class='bold'>Rp " . number_format($pajak, 0, ',', '.') . "</span></p>";
        echo "<p class='bold'>Total Bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
