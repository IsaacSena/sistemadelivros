<?php 
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Cadastrolivros.php');
    require_once('Formapagamento.php');

    use PHP\Modelo\Cliente;
    use PHP\Modelo\Cadastrolivros;
    use PHP\Modelo\Formapagamento;
    

    class Compra{
        private int $codigo;
        private Cliente $cliente;
        private Cadastrolivros $codigoliv;
        private Formapagamento $pagamento;

        public function __construct(int $codigo, Cliente $cliente, Cadastrolivros $codigoliv, Formapagamento $pagamento){
        
            $this->codigo = $codigo;
            $this->cliente = $cliente;
            $this->codigoliv = $codigoliv;
            $this->pagamento = $pagamento;
        }

        public function __get(string $dados):mixed{
            return $this->dados;
        }
    
        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            
            return "<br>Código da compra: ". $this->codigo.
                   "<br>Login: ". $this->cliente->imprimir().
                   "<br>Informações do(s) Livro(s): ". $this->codigoliv->imprimir().
                   $this->pagamento->imprimir();
                   
        }
        
        
    }





?>