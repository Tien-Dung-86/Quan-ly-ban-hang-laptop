<?php

namespace App\Controllers;

use App\Models\CartModel;

class CartController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new CartModel();
        parent:: __construct($this->model);
    }

    public function cartView()
    {
        $_SESSION['cart'] = [
            "image" => $_SESSION["image"],
            "name" => $_SESSION["name"],
            "quantity" => $_SESSION['quantity'],
            "price" => $_SESSION['price']
        ];
    }

    public function cart()
    {
        $id = $_GET['id'];
        settype($id, "int");
        $what = "add";
        if (isset($_GET['what'])) {
            $what = $_GET['what'];
        }
        if ($what == "add") {
            if (isset($_SESSION['cart']) == false) {
                $_SESSION['cart'] = [];
            }
        }
    }
}