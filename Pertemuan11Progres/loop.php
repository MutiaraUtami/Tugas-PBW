<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Pengulangan dengan for (angka)</h1>";
        for ($i = 1; $i <= 5; $i++) {
            echo "Angka ke-”.$i.”<br>";
        }

        echo "<h1>Pengulangan dengan for (buah)</h1>";
        $buah = ["Apel", "Jeruk", "Mangga"];

        for ($i = 0; $i < count($buah); $i++) {
            echo $buah[$i] . "<br>";
        }
        $nilai = 1;

        echo "<h1>Pengulangan dengan while</h1>";
        while ($nilai <= 5) {
            echo "Nilai: ". $nilai ."<br>";
            $nilai++;
        }

        echo "<h1>Pengulangan dengan foreach</h1>";
        $mahasiswa = [
            "10001" => "Andi",
            "10002" => "Budi",
            "10003" => "Citra"
         ];
         foreach ($mahasiswa as $nim => $nama) {
            echo "NIM: ". $nim .", Nama:". $nama."<br>";
         }

        echo "<h1>Ternary operator</h1>";
        $umur = 18;
        $status = ($umur >= 17) ? "Dewasa" : "Anak-anak";

echo $status;
         
    ?>
</body>
</html>