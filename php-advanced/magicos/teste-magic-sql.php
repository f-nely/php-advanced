<?php

require_once 'MagicSql.php';

$sql = new MagicSql();

// Domain Specific Language
echo $sql->select('*')
    ->from('usuarios')
    ->where('id = 10')
    ->getSql();