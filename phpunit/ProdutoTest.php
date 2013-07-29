<?php
require_once 'PHPUnit/Autoload.php';
require_once './Produto.php';


    class ProdutoTest extends PHPUnit_Framework_TestCase {
        public $Produto;
        
        public function setUp() {
            $this->Produto = new Produto;
        }
        
        
        public function testInstance() {
            $this->assertInstanceOf('Produto', $this->Produto);
        }
        
        
        public function testMenorValor() {
            $menorvalor = $this->Produto->menorValor();
            $this->assertNotEquals($menorvalor, null, 'Não localizou nenhum produto');
        }
        
        public function testMenorValorNotArray() {
            $this->assertNotEquals($this->Produto->menorValor(), array(), 'retornou um array');
        }
        
        
        public function testMenorValorIsAFloat() {
            $this->assertInternalType('float', $this->Produto->menorvalor());
        }
        
        
        public function testMenorValorMenorQueMaiorValor() {
            $this->assertGreaterThan($this->Produto->menorValor(), $this->Produto->maiorValor());
        }
        
    }
    