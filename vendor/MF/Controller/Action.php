<?php

namespace MF\Controller;

abstract class Action {
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }
}

?>