<?php 
    namespace PHP\modelo;


    class Cartao{
        protected string $numeroConta;
        protected string $numeroCartao;
        protected string $senha;

        public function __construct(string $numeroCartao, string $numeroConta, string $senha){
            $this->numeroCartao = $numeroCartao;
            $this->numeroConta = $numeroConta;
            $this->senha = $senha;

        }

        public function __get(string $dados):string{
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Número do cartão: ".$this->numeroCartao.
                   "<br>Número da conta: ".$this->numeroConta.
                   "<br>Senha: ".$this->senha;
        
        }
        
    }
?>