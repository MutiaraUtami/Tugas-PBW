<!DOCTYPE html>
<html>
<head>
   <title>Daftar Baru</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
   <h2> Daftar baru pengguna</h2>
   <?php if (isset($_GET['message'])): ?>
       <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
   <?php endif; ?>
   <form method="post" action="proses_register.php">
       <div class="mb-3">
           <label>Nama pengguna :</label>
           <input type="text" id="nama" name="nama" class="form-control" required>
       </div>
       <div class="mb-3">
           <label>Kata sandi :</label>
           <input type="password" id="katasandi" name="katasandi" class="form-control" required>
       </div>
       <button type="submit" class="btn btn-primary">Daftar</button>
   </form>
</body>
</html>
