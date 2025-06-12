<?php include 'proteksi.php'; ?>
<?php
include 'koneksi_db.php'; // Koneksi database

// Query untuk menampilkan data pelanggan
$query = "
   SELECT Nama, Alamat, Email, Telepon
   FROM Pelanggan
";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Daftar Pelanggan</title>
</head>
<body>
   <?php include 'nav.php'; ?>
   <div class="container mt-4">
       <h2>Daftar Pelanggan</h2>

       <!-- Tabel Daftar Pelanggan -->
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>Nama Pelanggan</th>
                   <th>Alamat</th>
                   <th>Email</th>
                   <th>Telepon</th>
               </tr>
           </thead>
           <tbody>
               <?php while ($row = $result->fetch_assoc()): ?>
               <tr>
                   <td><?= htmlspecialchars($row['Nama']) ?></td>
                   <td><?= htmlspecialchars($row['Alamat']) ?></td>
                   <td><?= htmlspecialchars($row['Email']) ?></td>
                   <td><?= htmlspecialchars($row['Telepon']) ?></td>
               </tr>
               <?php endwhile; ?>
           </tbody>
       </table>
   </div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
