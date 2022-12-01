<?php

namespace App\Models;

use App\Models;
class Book extends Produto {
    public function __setAttribute($attribute) {
        if(is_numeric($attribute)) {
            $this->attribute = $attribute;
        } else {
            throw new \Exception("Weight must be numeric.");
        }
    }
}

?>