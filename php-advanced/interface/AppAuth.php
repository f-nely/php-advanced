<?php
namespace Treinaweb;

class AppAuth implements Authentication
{

    public function login(): void
    {
        echo "Verifica: user e senha no db.\n";
    }

    public function validUser(string $user): void
    {
        echo "Verifica $user na session.";
    }
}