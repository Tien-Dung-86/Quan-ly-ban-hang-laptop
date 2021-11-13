<?php
namespace App\Models;


class ProductModel extends BaseModel {
    protected $table = "products";

    public function __construct(){
        parent:: __construct($this->table);
    }

    public function add($data){
        $sql = "INSERT INTO $this->table(product_code, brand, category, image, name, ram, cpu, card, hard_disk, screen, operating, weight, description, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['brand']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['image']);
        $stmt->bindParam(5, $data['name']);
        $stmt->bindParam(6, $data['ram']);
        $stmt->bindParam(7, $data['cpu']);
        $stmt->bindParam(8, $data['card']);
        $stmt->bindParam(9, $data['hard_disk']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['operating']);
        $stmt->bindParam(12, $data['weight']);
        $stmt->bindParam(13, $data['description']);
        $stmt->bindParam(14, $data['price']);
        $stmt->execute();
    }

    public function update($id, $data){
        $sql = "UPDATE $this->table SET product_code=?, brand=?, category=?, image=? , name=?, ram=?, cpu=?, card=?, hard_disk=?, screen=?, operating=?, weight=?, description=?, price=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['brand']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['image']);
        $stmt->bindParam(5, $data['name']);
        $stmt->bindParam(6, $data['ram']);
        $stmt->bindParam(7, $data['cpu']);
        $stmt->bindParam(8, $data['card']);
        $stmt->bindParam(9, $data['hard_disk']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['operating']);
        $stmt->bindParam(12, $data['weight']);
        $stmt->bindParam(13, $data['description']);
        $stmt->bindParam(14, $data['price']);
        $stmt->execute();
    }
}
