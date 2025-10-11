<?php

namespace App\DAO;

use App\Models\User;
use PDO;

class UserDAO extends Connection
{

    public function verify_email($email)
    {

        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

        $this->conn = null;
    }

    public function create(User $user)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha, celular)VALUES
                                    (:nome, :email, :senha, :celular)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":nome", $user->getNome());
        $stmt->bindValue(":email", $user->getEmail());
        $stmt->bindValue(":senha", $user->getSenha());
        $stmt->bindValue(":celular", $user->getCelular());
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

        $this->conn = null;
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() <= 0) {
            return false;
        }

        $password_verify = password_verify($password, $res['senha']);

        if (!$password_verify) {
            return false;
        }

        $this->conn = null;
        return $res;
    }
}
