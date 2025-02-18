<?php
// admin/index.php
session_start();
require_once('../config.php');
require_once('includes/db.php');

if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Consulta simples sem hash (conforme restrição)
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $user;
    header("Location: modules/sections.php");
    exit;
  } else {
    $error = "Usuário ou senha incorretos.";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <div class="login-container">
    <h2>Login Administrativo</h2>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Entrar</button>
    </form>
  </div>
</body>
</html>
