<?php

namespace App\Models;

class CartModel extends BaseModel
{
    protected $table = "products";

    public function __construct(){
        parent:: __construct($this->table);
    }
}