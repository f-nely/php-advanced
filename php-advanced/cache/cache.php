<?php

$cacheFile = 'cache.html';
$cacheTimeSec = 10;

if (file_exists($cacheFile)) {
    $filecreated = filemtime($cacheFile);
    if ( (time() - $cacheTimeSec) < $filecreated) {
        require_once $cacheFile;
        echo '<!-- Última vez em cache ' . date('H:i:s', $filecreated) . ' -->';
        exit();
    }
}

ob_start();

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TreinaWeb Cursos</title>
</head>
<body>
    <h1>TreinaWeb Cursos</h1>
    <ul>
        <li>PHP Básico</li>
        <li>PHP Intermediário</li>
        <li>PHP Avançado</li>
    </ul>
</body>
</html>
<?php

$cachedFile = fopen($cacheFile, 'w');
fwrite($cachedFile, ob_get_contents());
fclose($cachedFile);

ob_end_flush();
?>