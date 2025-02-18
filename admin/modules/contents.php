<?php
// admin/modules/contents.php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}

require_once('../config.php');
require_once('includes/db.php');
require_once('includes/functions.php');

// Processa o formulário para adicionar conteúdo
if(isset($_POST['submit'])) {
  $section_id = $_POST['section_id'];
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $conteudo = $_POST['conteudo'];
  $status = $_POST['status'];
  $data_publicacao = $_POST['data_publicacao'];
  $url = gerarSlug($titulo);
  
  // Upload simples da imagem de capa
  $imagem = '';
  if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $imagem = 'uploads/' . basename($_FILES['imagem']['name']);
    move_uploaded_file($_FILES['imagem']['tmp_name'], "../" . $imagem);
  }
  
  $query = "INSERT INTO contents (section_id, titulo, descricao, conteudo, status, data_publicacao, url, imagem) 
            VALUES ('$section_id', '$titulo', '$descricao', '$conteudo', '$status', '$data_publicacao', '$url', '$imagem')";
  mysqli_query($conn, $query);
  header("Location: contents.php");
  exit;
}

// Busca seções para o select
$result = mysqli_query($conn, "SELECT * FROM sections ORDER BY name ASC");
$sections = [];
while($row = mysqli_fetch_assoc($result)) {
  $sections[] = $row;
}

// Busca os conteúdos existentes
$query = "SELECT c.*, s.name as section_name FROM contents c LEFT JOIN sections s ON c.section_id = s.id ORDER BY c.data_publicacao DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciar Conteúdos</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>Gerenciar Conteúdos</h1>
  <form action="contents.php" method="post" enctype="multipart/form-data">
    <label for="section_id">Seção:</label>
    <select name="section_id" id="section_id" required>
      <?php foreach($sections as $sec): ?>
      <option value="<?php echo $sec['id']; ?>"><?php echo $sec['name']; ?></option>
      <?php endforeach; ?>
    </select>
    
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required>
    
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" rows="3" required></textarea>
    
    <label for="conteudo">Conteúdo:</label>
    <textarea name="conteudo" id="conteudo" rows="5" required></textarea>
    
    <label for="status">Status:</label>
    <select name="status" id="status">
      <option value="publicado">Publicado</option>
      <option value="novo">Novo</option>
      <option value="rascunho">Rascunho</option>
    </select>
    
    <label for="data_publicacao">Data de Publicação:</label>
    <input type="date" name="data_publicacao" id="data_publicacao" required>
    
    <label for="imagem">Imagem de Capa:</label>
    <input type="file" name="imagem" id="imagem">
    
    <button type="submit" name="submit" class="btn btn-primary">Salvar Conteúdo</button>
  </form>
  
  <h2>Conteúdos Existentes</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Seção</th>
      <th>Status</th>
      <th>Data</th>
      <th>Ações</th>
    </tr>
    <?php
    $query = "SELECT c.*, s.name as section_name FROM contents c LEFT JOIN sections s ON c.section_id = s.id ORDER BY c.data_publicacao DESC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['titulo']; ?></td>
      <td><?php echo $row['section_name']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['data_publicacao']; ?></td>
      <td>
        <!-- Links para editar ou excluir -->
        <a href="#">Editar</a> | <a href="#">Excluir</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
