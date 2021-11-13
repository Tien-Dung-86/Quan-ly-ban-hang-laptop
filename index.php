<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers;


$page = $_GET['page'] ?? "";

$productController = new Controllers\ProductController();
$accountController = new Controllers\AccountController();
$cartController = new App\Controllers\CartController();


include "src/Views/layout/header.php";

switch ($page) {
    case "product-list":
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->index();
        }
        break;
    case "product-procedure":
        include "src/Views/procedure.php";
        break;
    case "product-add":
        $productController->add();
        break;
    case "product-delete":
        $id = $_GET['id'];
        $productController->delete($id);
        break;
    case "product-update":
        $id = $_GET['id'];
        $productController->update($id);
        break;
    case "product-detail":
        $id = $_GET['id'];
        $productController->detail($id);
        break;

    case "account-list":
        if (isset($_GET['search'])) {
            $accountController->search($_GET['search']);
        } else {
            $accountController->index();
        }
        break;
    case "login":
        $accountController->showLogin();
        break;
    case "logout":
        $accountController->logout();
        break;
    case "register":
        $accountController->register();
        break;
    case "account-updateAccount":
        $id = $_GET['id'];
        $accountController->update($id);
        break;
    case "account-add":
        $accountController->add();
        break;
    case "account-delete":
        $id = $_GET['id'];
        $accountController->delete($id);
        break;
    case "cartView":
        $cartController->cartView();
    default:
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->home();
        }
}

include "src/Views/layout/footer.php";
