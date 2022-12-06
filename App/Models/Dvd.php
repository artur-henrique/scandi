<?php

namespace App\Models;

use App\Models;
class Dvd extends Produto {
    public function __setAttribute($attribute) {
        if(is_numeric($attribute)) {
            $this->attribute = $attribute;
        } else {
            throw new \Exception("MB must be numeric.");
        }
    }
}

?>