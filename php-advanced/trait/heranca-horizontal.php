<?php

trait Logger
{
    public function log($msg)
    {
        echo "Grava $msg log no banco";
    }
}

trait FileLogger

{
    public function Filelog($file, $msg)
    {
        echo "Grava no arquivo $file a mensagem $msg";
    }
}


class User
{
    use Logger, FileLogger;

    public function grava()
    {
        $this->log('Gravando usuário no banco de dados');
    }
}

$user = new User();
$user->grava();