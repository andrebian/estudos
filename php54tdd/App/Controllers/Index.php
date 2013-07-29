<?php

namespace App\Controllers;
use SON\Controller\Action;
use App\Models\Article;

class Index extends Action{
    
    public function index() {
        $article = new Article;
        $this->view->nome = $article->getNome();
        $this->render('index');
    }
}

?>
