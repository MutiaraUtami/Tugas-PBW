<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diskon Pembayaran UKT Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <h1>Diskon Pembayaran UKT Mahasiswa</h1>
    <div class="wrapper">
            <form method="post">
                <label for="npm">NPM:</label>
                <input type="text" name="npm" required>

                <label for="nama">Nama:</label>
                <input type="text" name="nama" required>

                <label for="prodi">Prodi:</label>
                <input type="text" name="prodi" required>

                <label for="semester">Semester:</label>
                <input type="number" name="semester" required>

                <label for="ukt">Golongan UKT:</label>
                <select name="ukt" required>
                    <option value="">-- Pilih Golongan UKT --</option>
                    <option value="1">Golongan 1 - Rp500.000</option>
                    <option value="2">Golongan 2 - Rp1.000.000</option>
                    <option value="3">Golongan 3 - Rp2.400.000</option>
                    <option value="4">Golongan 4 - Rp5.000.000</option>
                    <option value="5">Golongan 5 - Rp6.000.000</option>
                    <option value="6">Golongan 6 - Rp6.200.000</option>
                    <option value="7">Golongan 7 - Rp6.400.000</option>
                    <option value="8">Golongan 8 - Rp6.900.000</option>
                </select>

                <input type="submit" name="submit" value="Hitung Diskon">
            </form>

            <?php
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $golongan = $_POST['ukt'];

    // konversi golongan ke nominal UKT
    $ukt = 0;
    switch ($golongan) {
        case '1': $ukt = 500000; break;
        case '2': $ukt = 1000000; break;
        case '3': $ukt = 2500000; break;
        case '4': $ukt = 4000000; break;
        case '5': $ukt = 6000000; break;
        case '6': $ukt = 7500000; break;
        default: $ukt = 0;
    }

    $diskon = 0;
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5;
        }
    }

    $jumlahBayar = $ukt - ($ukt * $diskon / 100);
    $uktFormatted = "Rp. " . number_format($ukt, 0, ',', '.') . ",-";
    $bayarFormatted = "Rp. " . number_format($jumlahBayar, 0, ',', '.') . ",-";

    echo "<div class='hasil'>
        <h3>Hasil Perhitungan:</h3>
        <p><strong>NPM:</strong> $npm</p>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Prodi:</strong> $prodi</p>
        <p><strong>Semester:</strong> $semester</p>
        <p><strong>Golongan UKT:</strong> $golongan</p>
        <p><strong>Biaya UKT:</strong> $uktFormatted</p>
        <p><strong>Diskon:</strong> $diskon%</p>
        <p><strong>Yang Harus Dibayar:</strong> $bayarFormatted</p>
    </div>";
}
?>

    </div>
</div>

</body>
</html>
