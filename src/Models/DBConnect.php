<?php
namespace App\Models;

use PDO;
use PDOException;

class DBConnect{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct(){
        $this->dsn = "mysql:host=localhost;dbname=case_study";
        $this->user = "root";
        $this->password = "root";
    }

    public function connect(){
        try{
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e){
            echo $e->getMessage();
            exit();
        }

    }
}