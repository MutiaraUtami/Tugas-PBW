<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
    <h2>Form Penilaian</h2>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama">
    <label for="nilai">Nilai:</label>
    <input type="number" name="nilai" id="nilai">
    <input type="submit" value="Proses">
</form>

    <div class="output">
        <h2>Hasil Penilaian</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $nilai = $_POST['nilai'];

        if ($nama == "" || $nilai == "") {
            echo "Nama dan nilai tidak boleh kosong.";
        } else {
            echo "Nama: $nama<br>";
            echo "Nilai: $nilai<br>";

            // Tentukan predikat dan status
            if ($nilai >= 85 && $nilai <= 100) {
                $predikat = "A";
                $status = "Lulus";
            } elseif ($nilai >= 75 && $nilai <= 84) {
                $predikat = "B";
                $status = "Lulus";
            } elseif ($nilai >= 65 && $nilai <= 74) {
                $predikat = "C";
                $status = "Tidak Lulus";
            } elseif ($nilai >= 50 && $nilai <= 64) {
                $predikat = "D";
                $status = "Tidak Lulus";
            } elseif ($nilai >= 0 && $nilai <= 49) {
                $predikat = "E";
                $status = "Tidak Lulus";
            } else {
                $predikat = "Tidak valid";
                $status = "-";
            }

            echo "Predikat: $predikat<br>";
            if ($predikat !== "Tidak valid") {
                echo "Status: $status";
            }
            echo "</div>";
        }
    }
    ?>
    </div>
</body>
</html>
