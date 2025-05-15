<?php
echo "<h3>Soal 4: Cek Genap atau Ganjil</h3>";
?>

<form method="post">
    <label>Masukkan angka: </label>
    <input type="number" name="angka" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['angka'])) {
    $angka = (int) $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "<p>Angka <strong>$angka</strong> adalah <strong>$hasil</strong>.</p>";
}
?>
