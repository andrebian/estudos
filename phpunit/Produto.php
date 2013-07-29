<?php
    
    class Produto {
        
        private function __lista() {
            $listaProdutos = require './sources/produtos.php';
            return $listaProdutos;
        }
        
        
        public function menorValor() {
            $listaProdutos = $this->__lista();

            $menor = 0;
            
            foreach($listaProdutos as $produto) {
                if ( $produto['valor'] < $menor || $menor == 0 ) {
                    $menor = $produto['valor'];
                }
            }
            
            return (float)$menor;
        }
        
        
        /**
         * 
         * @return float
         */
        public function maiorValor() {
            $listaProdutos = $this->__lista();
            
            $maior = 0;
            
            foreach($listaProdutos as $produto) {
                if ( $produto['valor'] > $maior || $maior == 0 ) {
                    $maior = $produto['valor'];
                }
            }
            return (float)$maior;
        }
        
    }



?>
