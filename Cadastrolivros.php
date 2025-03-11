<?php 
    namespace PHP\Modelo;
    
    class Cadastrolivros{
        private int $codigo;
        private string $titulo;
        private string $autor;
        private string $categoria;
        private string $editora;
        private int $quantidade;
        private float $precoUnit;

        public function __construct(int $codigo, string $titulo, string $autor, string $categoria, string $editora, int $quantidade, float $precoUnit){

            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->categoria = $categoria;
            $this->editora = $editora;
            $this->quantidade = $quantidade;
            $this->precoUnit = $precoUnit;

        }

        public function __get(string $dados):mixed{
            return $this->$dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Código: ".$this->codigo.
                   "<br>Título: ".$this->titulo.
                   "<br>Autor: ".$this->autor.
                   "<br>Categoria: ".$this->categoria.
                   "<br>Editora: ".$this->editora.
                   "<br>Quantidade: ".$this->quantidade.
                   "<br>Preço Unitário: "."R$".$this->precoUnit." Reais";
        }
        
        public function validarLivros(int $codigo, string $titulo, string $autor, string $categoria, string $editora, int $quantidade):mixed{
            if ($this->codigo != int || $this->titulo != "" || $this->autor != "" || $this->categoria != "" || $this->editora != "" ||$this->quantidade != 10 || && $this->precoUnit != 10) {
                return "<br>algo está errado";
            }else {
                "<br>Código: ".$this->codigo.
                   "<br>Título: ".$this->titulo.
                   "<br>Autor: ".$this->autor.
                   "<br>Categoria: ".$this->categoria.
                   "<br>Editora: ".$this->editora.
                   "<br>Quantidade: ".$this->quantidade.
                   "<br>Preço Unitário: "."R$".$this->precoUnit." Reais";
            }
        }
     
        
    }
?>