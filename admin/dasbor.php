<?php
session_start();

// Akun login (bisa kamu ubah nanti)
$akun = [
  "admin" => "password123"
];
?>
```

---

*✅ 2. File `dashboard.php` (Dasbor)*

```php
<?php
include("config.php");
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin – Pengaduan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand mb-0 h1">Dasbor Admin</span>
    <a href="logout.php" class="btn btn-outline-light">Keluar</a>
  </nav>

  <div class="container mt-4">
    <h2>Daftar Pengaduan Warga</h2>
    <p class="text-muted">Berikut adalah data pengaduan yang masuk.</p>

    <iframe src="https://docs.google.com/spreadsheets/d/YOUR_SHEET_ID_HERE/edit?usp=sharing&rm=minimal" width="100%" height="600" frameborder="0"></iframe>

    <!-- kamu juga bisa tampilkan data manual dari database atau integrasi -->
  </div>
</body>
</html>
```

📌 Ganti `YOUR_SHEET_ID_HERE` dengan ID spreadsheet-mu.