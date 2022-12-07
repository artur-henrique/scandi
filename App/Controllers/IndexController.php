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
        header("Content-Type: application/json");
        print_r($produto);
        return;
    }
    public function post() {
        $body = file_get_contents('php://input');
        $obj = json_decode($body);
        
        $produto = Container::getModel($obj->type);
        try {
            $produto->save();
            http_response_code(201);
            return;
        } catch (\Exception $e) {
            print_r($e->errorInfo[1]);
            http_response_code(400);
            return;
        }
    }

    public function delete() {
        $produto = Container::getModel('produto');
        $produto = $produto->delete();
        return;
    }

}

?>