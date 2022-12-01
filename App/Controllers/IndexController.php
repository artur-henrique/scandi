<?php 

namespace App\Controllers;

//Recursos Miniframeworks
use MF\Controller\Action;
use MF\Model\Container;

// Models
use App\Models\Produto;
use App\Models\Info;

class indexController extends Action {
    // public function index() {
    //     echo strtolower($_SERVER['REQUEST_METHOD']);

    //     $produto = Container::getModel('Produto');

    //     $produtos = $produto->getProdutos();

    //     $this->view->dados = $produtos;

    //     $this->render('index', 'layout1');
    // }

    // public function sobreNos() {

    //     $info = Container::getModel('Info');

    //     $informacoes = $info->getInfo();

    //     $this->view->dados = $informacoes;

    //     // $this->view->dados = array('Notebook', 'Smartphone');
    //     $this->render('sobreNos', 'layout1');
    // }
    public function get() {
        // Preciso instanciar algum produto pra conectar no BD e dar um select *
        // Retornar os dados em JSON.
        echo "cheguei aqui no get";
        $produto = Container::getModel('produto');
        $produto = $produto->findAll();
        echo '<br>';
        echo '<hr>';
        print_r(json_encode($produto));
        echo '<hr>';
        return '';
    }
    public function post() {
        print_r($_POST);
        $produto = Container::getModel($_POST['type']);
        $produto->save();
    }

}

?>