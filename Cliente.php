<?php 
    namespace PHP\modelo;
    require_once('Cartao.php');
    use PHP\Modelo\Cartao;

    class Cliente{
        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $dataNascimento;
        protected string $login;
        protected string $senha;
        protected Cartao $cartao;

        public function __construct(string $nome, string $endereco, string $telefone, string $dataNascimento, string $login, string $senha, Cartao $cartao){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataNascimento = $dataNascimento;
            $this->login = $login;
            $this->senha = $senha;
            $this->cartao = $cartao;

        }

        public function __get(string $dados):string{
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Nome: ".$this->nome.
                   "<br>Endereco: ".$this->endereco.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Data de Nascimento: ".$this->dataNascimento.
                   "<br>Login: ".$this->login.
                   "<br>Senha: ".$this->senha.
                   "<br>Cartão: ".$this->cartao->imprimir();
        }
        
    }
?>