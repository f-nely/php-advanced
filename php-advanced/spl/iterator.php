<?php

/*$phpdir = new DirectoryIterator('..\\');

foreach ($phpdir as $dir) {
    echo $dir . '<br>';
    var_dump($dir->isDir());
}*/

/*$linguagens = ['PHP','C','C++', 'C#', 'Java', 'VB.NET', 'Python'];

$arrayIt = new ArrayIterator($linguagens);

//echo $arrayIt->count();

while ($arrayIt->valid()) {
    echo $arrayIt->key() . ' : ' . $arrayIt->current() . '<br>';
    $arrayIt->next();
}

foreach ($arrayIt as $value) {
    echo $value . '<br>';
}*/

class User extends ArrayObject
{
    public string $nome;
    public string $email;
}

$user = new User([
    'nome' => 'Leonardo',
    'email' => 'leo@teste.com'
]);

/*$user['nome'] = 'Leonardo';
$user['email'] = 'leo@teste.com';*/

echo $user['nome'];

var_dump($user);