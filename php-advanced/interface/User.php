<?php
namespace Treinaweb;

class User
{
    private $auth;
    private int $id;

    public function setAuth(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        $this->auth->login();
    }

    public function validUser()
    {
        $this->auth->validUser($this->id);
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}