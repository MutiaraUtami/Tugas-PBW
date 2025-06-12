<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nama = $_POST['nama'];
   $katasandi = $_POST['katasandi'];


   $stmt = $conn->prepare("INSERT INTO pengguna (nama, katasandi) VALUES (?, ?)");
   $stmt->bind_param("ss", $nama, $katasandi);

   
   if ($stmt->execute()) {
       echo "<script>
           alert('Berhasil daftar!');
           window.location.href = 'index.php';
       </script>";
   } else {
       echo "<script>
           alert('Gagal mendaftar: " . addslashes($stmt->error) . "');
           window.location.href = 'index.php';
       </script>";
   }
}
?>
