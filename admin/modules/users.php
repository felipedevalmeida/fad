<?php
// admin/modules/users.php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}

require_once('../config.php');
require_once('includes/db.php');

// Processa o formulário para adicionar usuário
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $grupo = $_POST['grupo']; // ADMINISTRADOR, DESENVOLVEDOR ou PUBLICADOR

  $query = "INSERT INTO users (username, password, email, grupo) VALUES ('$username', '$password', '$email', '$grupo')";
  mysqli_query($conn, $query);
  header("Location: users.php");
  exit;
}

// Busca os usuários existentes
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY username ASC");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciar Usuários</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>Gerenciar Usuários</h1>
  <form action="users.php" method="post">
    <label for="username">Usuário:</label>
    <input type="text" name="username" id="username" required>
    
    <label for="password">Senha:</label>
    <input type="text" name="password" id="password" required>
    
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    
    <label for="grupo">Grupo:</label>
    <select name="grupo" id="grupo">
      <option value="ADMINISTRADOR">ADMINISTRADOR</option>
      <option value="DESENVOLVEDOR">DESENVOLVEDOR</option>
      <option value="PUBLICADOR">PUBLICADOR</option>
    </select>
    
    <button type="submit" name="submit" class="btn btn-primary">Salvar Usuário</button>
  </form>
  
  <h2>Usuários Existentes</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th>
      <th>Usuário</th>
      <th>E-mail</th>
      <th>Grupo</th>
      <th>Ações</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['grupo']; ?></td>
      <td>
        <a href="#">Editar</a> | <a href="#">Excluir</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
