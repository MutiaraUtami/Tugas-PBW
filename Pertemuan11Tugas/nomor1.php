<?php
function cekJenisKendaraan($jumlah_roda) {
    switch ($jumlah_roda) {
        case 2:
            return "Sepeda Motor";
        case 3:
            return "Bajaj";
        case 4:
            return "Mobil";
        case 6:
            return "Truk Kecil";
        case 10:
            return "Truk Besar";
        default:
            return "Jenis kendaraan tidak diketahui";
    }
}

echo "<h3>Soal 1: Jenis Kendaraan</h3>";
?>

<form method="post">
    <label>Masukkan jumlah roda: </label>
    <input type="number" name="roda" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['roda'])) {
    $roda = (int) $_POST['roda'];
    $jenis = cekJenisKendaraan($roda);
    echo "<p>Jumlah roda: <strong>$roda</strong><br>";
    echo "Jenis kendaraan: <strong>$jenis</strong></p>";
}
?>
