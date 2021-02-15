<?php

namespace Treinaweb;

interface Authentication
{
    public function login(): void;
    public function validUser(string $user): void;
}