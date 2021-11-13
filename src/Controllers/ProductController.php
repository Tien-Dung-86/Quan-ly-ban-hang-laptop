<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProductModel();
        parent:: __construct($this->model);
    }

    public function index()
    {
        $products = parent::index();
        include "src/Views/list.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "src/Views/add.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "brand" => $_POST["brand"],
                "category" => $_POST["category"],
                "image" => $_POST["image"],
                "name" => $_POST["name"],
                "ram" => $_POST["ram"],
                "cpu" => $_POST["cpu"],
                "card" => $_POST["card"],
                "hard_disk" => $_POST["hard_disk"],
                "screen" => $_POST["screen"],
                "operating_system" => $_POST["operating"],
                "weight" => $_POST["weight"],
                "description" => $_POST["description"],
                "price" => $_POST["price"]
            ];
            $this->model->add($data);
            header("Location:index.php");
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/update.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "brand" => $_POST["brand"],
                "category" => $_POST["category"],
                "image" => $_POST["image"],
                "name" => $_POST["name"],
                "ram" => $_POST["ram"],
                "cpu" => $_POST["cpu"],
                "card" => $_POST["card"],
                "hard_disk" => $_POST["hard_disk"],
                "screen" => $_POST["screen"],
                "operating_system" => $_POST["operating"],
                "weight" => $_POST["weight"],
                "description" => $_POST["description"],
                "price" => $_POST["price"]
            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }

    public function search($keyword)
    {
        $products = $this->model->search($keyword);
        include "src/Views/home.blade.php";
    }

    public function home()
    {
        $products = parent::index();
        include "src/Views/home.blade.php";
    }

    public function detail($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/detailProduct.php";
        }
    }
}