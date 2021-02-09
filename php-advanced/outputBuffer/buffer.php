<?php

ob_start();

phpinfo();

$conteudo = ob_get_contents();

ob_end_clean();

$file = file_put_contents('phpinfo.html', $conteudo);

if ($file) {
    echo "<a href='phpinfo.html'>Link para o arquivo</a>";
} else {
    echo "Erro ao gerar arquivo: ";
}