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
        return $search;
    }

    public function save() {
        $this->__setSku($_POST['sku']);
        $this->__setName($_POST['name']);
        $this->__setPrice($_POST['price']);
        $this->__setType($_POST['type']);
        $this->__setAttribute($_POST['attribute']);
        $query = "insert into produtos (sku, name, price, type, attribute) values (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array($this->__getSku(), $this->__getName(), $this->__getPrice(), $this->__getType(), $this->__getAttribute()));
    }
}

?>