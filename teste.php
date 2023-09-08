<?php
$dir = "C:\\Users\\DevBurn2\\Desktop\\teste";
$arquivo_dir = $dir . "\\arquivo";
$novas_dir = $dir . "\\novas";

$fotos = glob("{$arquivo_dir}\\*.jpg");
foreach ($fotos as $arq)
{
  $pi = pathinfo($arq);
  // $n = (int) $pi['filename'];
  // $nome_arq = "teste_" . ($n + 2) . "_noticia.jpg";
  $nome_arq = "noticia_" . $pi['basename'];

  copy($arq, $novas_dir . "\\" . $nome_arq);
}

# Basename function - https://www.php.net/manual/en/function.basename.php
# Pathinfo function - https://www.php.net/manual/en/function.pathinfo
# Glob function     - https://www.php.net/manual/en/function.glob
# Copy function     - https://www.php.net/manual/en/function.copy
# Rename function   - https://www.php.net/manual/en/function.rename
# foreach           - https://www.php.net/manual/en/control-structures.foreach.php
?>