<!DOCTYPE html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h2>Listado de archivos</h2> 
<?php
  $directorio = $_SERVER['DOCUMENT_ROOT'].'/images/';
  $scanResult = scandir($directorio);
  $archivos = [];
  foreach($scanResult as $aux) {
    if (is_file($aux)) $archivos[] = $aux;
  }
  natsort($archivos);
  echo '<p>Mostrando archivos encontrados en '.$directorio.'</p>'."\n".'<ul>'."\n";
  for ($i=0; $i<count($archivos); $i++) echo '<li>'.$archivos[$i].'</li>'."\n";
  echo '</ul>'."\n";
?>
</body>
</html>