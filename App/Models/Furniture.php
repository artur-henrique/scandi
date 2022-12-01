<?php

namespace App\Models;

use App\Models;
class Furniture extends Produto {
    public function __setAttribute(string $attribute) {
        if($attribute != '') {
            $this->attribute = $attribute;
        } else {
            throw new \Exception("Dimensions must be filled.");
        }
    }
}

?>