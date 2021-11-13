<?php

namespace App\Models;

class AccountModel extends BaseModel
{
    protected $table = "accounts";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE email = '$email' AND password = '$password'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count != 0;
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = '$email'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch();
    }

    public function updateEmail($id, $data){
        $sql = "UPDATE $this->table SET  name=?, email=?, password=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['password']);
        $stmt->execute();
    }

    public function addEmail($data){
        $sql = "INSERT INTO $this->table(name, email, password) VALUE (?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['password']);
        $stmt->execute();
    }

    public function checkEmail($email){
        $sql = "SELECT * FROM $this->table WHERE email = '$email'";
        $stmt = $this->connect->query($sql);
        $count = $stmt->rowCount();
        return $count != 0;
    }
}

