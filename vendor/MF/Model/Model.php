<?php

namespace MF\Model;

abstract class Model {
    public $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }
}

?>