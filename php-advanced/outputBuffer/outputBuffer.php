<?php

/*echo "<h1>TreinaWeb Cursos</h1>";

// Inicializa o buffer (isso bloqueia qualquer saída para o navegador)
ob_start();

echo <<<TXT
O TreinaWeb é a principal empresa especializada em cursos online de
tecnologia da informação no Brasil.
TXT;

// Encerra e limpa tudo o que foi coletado no buffer desde o início dele.
//ob_end_clean();
ob_end_flush();*/

/*ob_start(); // Inicia o buffer
echo "Linha 1
";
ob_end_flush(); // Envia para a saída e finaliza.

ob_start(); // Inicia o buffer
echo "Linha 2!
";
ob_end_clean(); // Finaliza SEM enviar para a saída.

ob_start(); // Inicia o buffer
echo "Linha 3";*/

/*// Inicia o buffer
ob_start();
echo "Linha 1
";
// Envia para a saída, mas não finaliza o buffer;
// ele continua coletando os dados
ob_flush();

echo "Linha 2!
";
echo "Linha 3!
";
echo "Linha 4!
";
ob_end_clean(); // Finaliza o buffer sem enviá-lo para a saída.

echo "Linha 5";*/

/*// Inicia o buffer com uma função de callback
ob_start('substituir');

// 'Imprime' no buffer
echo 'Cachorros são inteligentes e engraçados.';
exit;

echo 'Será que vai imprimir isso aqui?';

function substituir($buffer)
{
    return str_replace('Cachorros', 'Gatos', $buffer);
}*/

/*// Inicia o buffer com uma função de callback
ob_start(function ($buffer) {
    return str_replace('Cachorros', 'Gatos', $buffer);
});

// 'Imprime' no buffer
echo 'Cachorros são inteligentes e engraçados.';
exit;

echo 'Será que vai imprimir isso aqui?';*/

/*ob_start();
echo "TreinaWeb";
$length1 = ob_get_length();
echo "Cursos";
$length2 = ob_get_length();
ob_end_clean(); // Encerra o buffer

echo $length1 . " - " . $length2;*/

/*ob_start();
echo "TreinaWeb";
$conteudo1 = ob_get_contents();
echo "Cursos";
$conteudo2 = ob_get_contents();
ob_end_clean(); // Encerra o buffer sem enviá-lo para a saída.

printf('%s <br> %s', $conteudo1, $conteudo2);*/

ob_start();

# Parte 1
echo "TreinaWeb";
printf('<br><b>Parte 1: conteúdo atual do buffer:</b> %s<br><br>', ob_get_contents());

ob_flush(); // Pega o conteúdo atual do buffer e envia para a saída.

# Parte 2
echo "Cursos";
printf('<br><b>Parte 2: conteúdo atual do buffer:</b> %s<br>', ob_get_contents());