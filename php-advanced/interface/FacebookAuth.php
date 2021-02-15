<?php
namespace Treinaweb;

class FacebookAuth implements Authentication
{

    public function login(): void
    {
        echo "Verifica user via api do Facebook";
    }

    public function validUser(string $user): void
    {
        echo "Verifica se o $user não expirou no Facebook";
    }
}