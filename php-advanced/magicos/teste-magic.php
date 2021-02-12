<?php

require_once 'MagicList.php';

$list = new MagicList();
$list->name = 'Leonardo';
$list->email = 'leonardo@test.com';

echo $list->name;
echo '<br>';
echo $list->email;

var_dump($list);