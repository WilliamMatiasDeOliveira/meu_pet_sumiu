<?php

namespace App\DAO;

use PDO;

class UserDAO extends Connection{

    public function verify_create_account($email){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            return false;
        } else {
            return true;
        }
    }

    public function create_user(User $user){
        
    }
}