<?php
// admin/includes/functions.php

// Função para gerar URL amigável (slug)
function gerarSlug($string) {
  $slug = strtolower(trim($string));
  $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
  $slug = preg_replace('/-+/', '-', $slug);
  return $slug;
}
?>
