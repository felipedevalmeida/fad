-- Criação da tabela de Usuários
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  grupo ENUM('ADMINISTRADOR', 'DESENVOLVEDOR', 'PUBLICADOR') NOT NULL
);

-- Criação da tabela de Seções
CREATE TABLE IF NOT EXISTS sections (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  parent_id INT DEFAULT 0,
  url VARCHAR(150) NOT NULL,
  allowed_groups VARCHAR(100) NOT NULL
);

-- Criação da tabela de Conteúdos
CREATE TABLE IF NOT EXISTS contents (
  id INT AUTO_INCREMENT PRIMARY KEY,
  section_id INT NOT NULL,
  titulo VARCHAR(150) NOT NULL,
  descricao TEXT NOT NULL,
  conteudo TEXT NOT NULL,
  status ENUM('publicado', 'novo', 'rascunho') NOT NULL,
  data_publicacao DATE NOT NULL,
  url VARCHAR(150) NOT NULL,
  imagem VARCHAR(255),
  FOREIGN KEY (section_id) REFERENCES sections(id)
);
