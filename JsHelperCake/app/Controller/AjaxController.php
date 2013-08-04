<?php

App::uses('AppController', 'Controller');


class AjaxController extends AppController
{
    public function beforeFilter()
    {
        $this->autoRender = false;
        $this->layout = null;
        $this->view = null;
        
        parent::beforeFilter();
    }
    
    public function carregaCombo()
    {
        $lista = array(
            1 => array('nome' => 'Teste'), 
            2 => array('nome' => 'Novo'), 
            3 => array('nome' => 'Pra já')
        );
        
        return json_encode($lista);
    }
    
    
    public function abrirArquivo() 
    {
        $content = 'Não conseguiu abrir o arquivo solicitado';
        
        if (is_file('files/teste.txt') ) {
            $content = file_get_contents('files/teste.txt');
        }
        
        return $content;
    }
}

?>
