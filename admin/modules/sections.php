<?php
// admin/modules/sections.php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}

require_once('../../config.php');
require_once('../includes/db.php');
require_once('../includes/functions.php');

// Processa o formulário para adicionar/editar seção
if(isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $parent_id = $_POST['parent_id'];
  $url = gerarSlug($nome);
  $allowed_groups = isset($_POST['allowed_groups']) ? implode(',', $_POST['allowed_groups']) : '';
  
  // Inserir nova seção
  $query = "INSERT INTO sections (name, parent_id, url, allowed_groups) VALUES ('$nome', '$parent_id', '$url', '$allowed_groups')";
  mysqli_query($conn, $query);
  header("Location: sections.php");
  exit;
}

// Busca seções existentes para o select de seção pai
$result = mysqli_query($conn, "SELECT * FROM sections ORDER BY name ASC");
$sections = [];
while($row = mysqli_fetch_assoc($result)) {
  $sections[] = $row;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciar Seções</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>Gerenciar Seções</h1>
  <form action="sections.php" method="post">
    <label for="nome">Nome da Seção:</label>
    <input type="text" name="nome" id="nome" required>
    
    <label for="parent_id">Seção Pai:</label>
    <select name="parent_id" id="parent_id">
      <option value="0">Nenhuma</option>
      <?php foreach($sections as $sec): ?>
      <option value="<?php echo $sec['id']; ?>"><?php echo $sec['name']; ?></option>
      <?php endforeach; ?>
    </select>
    
    <label for="allowed_groups">Permitir edição (selecione os grupos):</label>
    <select name="allowed_groups[]" id="allowed_groups" multiple>
      <option value="ADMINISTRADOR">ADMINISTRADOR</option>
      <option value="DESENVOLVEDOR">DESENVOLVEDOR</option>
      <option value="PUBLICADOR">PUBLICADOR</option>
    </select>
    
    <button type="submit" name="submit" class="btn btn-primary">Salvar Seção</button>
  </form>
  
  <h2>Seções Existentes</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>URL</th>
      <th>Seção Pai</th>
      <th>Grupos Permitidos</th>
      <th>Ações</th>
    </tr>
    <?php
    $query = "SELECT s.*, p.name as parent_name FROM sections s LEFT JOIN sections p ON s.parent_id = p.id ORDER BY s.id ASC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['url']; ?></td>
      <td><?php echo ($row['parent_name'] ? $row['parent_name'] : 'Nenhuma'); ?></td>
      <td><?php echo $row['allowed_groups']; ?></td>
      <td>
        <!-- Links para editar ou excluir (a implementação dos processos de edição/exclusão pode ser incrementada) -->
        <a href="#">Editar</a> | <a href="#">Excluir</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
