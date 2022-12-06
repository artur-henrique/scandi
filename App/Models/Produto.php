<?php

namespace App\Models;

use MF\Model\Model;
class Produto extends Model {
    public $sku;
    public $name;
    public $price;
    public $type;
    public $attribute;
    public function __getSku(): string {
        return $this->sku;
    }

    public function __setSku($sku) {
        if($sku != '') {
            $this->sku = $sku;
        } else {
            throw new \Exception("SKU must be filled");
        }
    }

    public function __getName(): string {
        return $this->name;
    }

    public function __setName(string $name) {
        if($name != '') {
            $this->name = $name;
        } else {
            throw new \Exception("Name must be filled.");
        }
    }

    public function __getPrice() {
        return $this->price;
    }

    public function __setPrice(float $price) {
        if($price > 0) {
            $this->price = $price;
        } else {
            throw new \Exception("Price must be more than 0.");
        }
    }

    public function __getType(): string {
        return $this->type;
    }

    public function __setType(string $type) {
        if(in_array($type, ['dvd', 'book', 'furniture'], true)) {
            $this->type = $type;
        } else {
            throw new \Exception("Type must be one of the dropdown menu.");
        }
    }

    public function __getAttribute(): string {
        return $this->attribute;
    }

    public function __setAttribute($attribute) {}


    public function findAll() {
        $query = "select * from produtos";
        $search = $this->db->query($query)->fetchAll();
        $search = json_encode($search);
        return $search;
    }

    public function save() {
        $body = file_get_contents('php://input');
        $obj = json_decode($body);

        $this->__setSku($obj->sku);
        $this->__setName($obj->name);
        $this->__setPrice($obj->price);
        $this->__setType($obj->type);
        $this->__setAttribute($obj->attribute);

        $query = "insert into produtos (sku, name, price, type, attribute) values (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array($this->__getSku(), $this->__getName(), $this->__getPrice(), $this->__getType(), $this->__getAttribute()));
    }

    public function delete() {
        $body = file_get_contents('php://input');
        $sku = json_decode($body);
        $this->__setSku($sku->sku);
        
        $query = "delete from produtos where sku = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array($this->__getSku()));
        $this->db = null;
        $stmt = null;
    }
}

?>