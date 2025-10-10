<?php

namespace App\Models;

class User
{

    public function __construct(
        private int $id = "",
        private string $nome = "",
        private string $email = "",
        private string $senha = "",
        private string $celular = ""
    ) {}

    // getters and setters
    public function getId(): int
    {
        return $this->id;
    }   
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getSenha(): string
    {
        return $this->senha;
    }
    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }
    public function getCelular(): string
    {
        return $this->celular;
    }
    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }

}
