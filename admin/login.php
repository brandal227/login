
<?php include("config.php");?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  if (isset($akun[$user]) && $akun[$user] == $pass) {
    $_SESSION["login"] = true;
    header("admin: dashboard.php");
    exit;
} else {
    $error = "Login gagal!";
}
}
?>
<form method="POST">
  <input name="username" required>
  <input name="password" type="password" required>
  <button type="submit">Login</button>
  <?php if(isset($error)) echo "<p>$error</p>";?>
</form>