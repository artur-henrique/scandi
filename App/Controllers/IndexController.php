<?php 

namespace App\Controllers;

//Recursos Miniframeworks
use MF\Controller\Action;
use MF\Model\Container;

// Models
use App\Models\Produto;
use App\Models\Info;

class indexController extends Action {
    public function get() {
        $produto = Container::getModel('produto');
        $produto = $produto->findAll();
        return '';
    }
    public function post() {
        print_r($_POST);
        $produto = Container::getModel($_POST['type']);
        $produto->save();
    }

    public function delete() {
        // Connect to DB
        // Create a function that deletes the product
        // Do I have to instanciate the Product? Does it make sense?
        $produto = Container::getModel('produto');
        $produto = $produto->delete();
        return '';
    }

}

?>