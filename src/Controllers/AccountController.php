<?php

namespace App\Controllers;
session_start();

use App\Models\AccountModel;

class AccountController extends BaseController
{
    protected $model;


    public function __construct()
    {
        $this->model = new AccountModel();
        parent::__construct($this->model);
    }

    public function index()
    {
        $accounts = parent::index();
        include "src/Views/account/list.php";
    }

    public function login($email, $password)
    {

        if ($this->model->checkLogin($email, $password)) {
            $account = $this->model->getByEmail($email);
            $_SESSION['accountname'] = $account['name'];
            $_SESSION['email'] = $account['email'];
            header("Location:index.php?page=product-home");
        } else {
            echo "Wrong account";
        }
    }

    public function showLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Auth/login.php";
        } else {
            $this->login($_REQUEST['email'], $_REQUEST['password']);
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php?page=login");
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/account/updateAccount.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "brand" => $_POST["email"],
                "category" => $_POST["password"],
            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=account-list");
        }
    }

    public function search($keyword)
    {
        $accounts = $this->model->search($keyword);
        include "src/Views/account/list.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "src/Views/account/add.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"],

            ];
            $this->model->addEmail($data);
            header("Location:index.php?page=account-list");
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:index.php?page=account-list");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/Views/Auth/register.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ];
            if ($this->validateRegister($data)) {
                $this->model->addEmail($data);
                echo '<script type="text/javascript"> alert("Đăng ký thành công"); window.location.href = "index.php?page=login"  </script>';
            } else {
                header('Location:index.php?page=register');
            }
        }
    }

    public function validateRegister($data)
    {
        $error = [];
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        if (empty($name)) {
            $error['name'] = 'Input username, please';
        } else if (strlen($name) < 4 || strlen($name) > 16) {
            $error['name'] = 'Username must be 4 to 16 characters';
        }

        if (empty($email)) {
            $error['email'] = 'Input email please';
        } else if ($this->model->checkEmail($email)) {
            $error['email'] = 'Email is used';
        }

        if (empty($password)) {
            $error['password'] = 'Input password, please';
        } else if (strlen($password) < 6 || strlen($password) > 16) {
            $error['password'] = 'Password must be 6 to 16 characters';
        }
        $_SESSION['error'] = $error;
        return empty($error);
    }
}

