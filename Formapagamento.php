<?php 
    namespace PHP\modelo;


    class Formapagamento{
        protected string $credito;


        public function __construct(string $credito){
            $this->credito = $credito;

        }

        public function __get(string $dados):string{
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Forma de Pagamento: ".$this->credito;
              
        }
        
    }
?>