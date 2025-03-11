<?php 
    namespace PHP\modelo;


    class Cartao{
        protected string $numeroConta;
        protected string $numeroCartao;
        protected string $senha;

        public function __construct(string $numeroConta,string $numeroCartao,string $senha){
            $this->numeroConta = $numeroConta;
            $this->numeroCartao = $numeroCartao;
            $this->senha = $senha;
            

        }

        public function __get(string $dados):string{
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return  "<br>Número da conta: ".$this->numeroConta.
                    "<br>Número do cartão: ".$this->numeroCartao.
                    "<br>Senha: ".$this->senha;
        
        }

        public function validarCartao(string $numeroConta,string $numeroCartao,string $senha):string{
            if ($this->numeroConta != 1234 || $this->numeroCartao != 5678 ||  $this->senha != 91011) {
                return "<br>Número da(o) conta, cartao ou senha estão inválidos";
            }else {
                return  "<br><br>Bem vindo isaac".
                        "<br>Número da conta: ".$this->numeroConta.
                        "<br>Número do cartão: ".$this->numeroCartao.
                        "<br>Senha: ".$this->senha;
            }
        }
        
    }
?>