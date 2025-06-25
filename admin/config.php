<?php
session_start();

// Akun login sederhana (username => password)
$akun = [
  "admin" => "pas123"
];

// Fungsi untuk mengecek status login
function cekLogin() {
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
}
?>