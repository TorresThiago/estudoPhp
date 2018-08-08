<?php
    class Pessoa{
        public $nome = "Thiago Torres";
        protected $idade = 31;
        private $senha = "88496307";

        public function verDados()
        {
            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";
        }

    }

    class Programador extends Pessoa {
        public function verDados()
        {
            echo get_class($this) . "<br/>";

            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";
        }
    }


    $objeto = new Programador();

    //echo $objeto->nome . "<br/>";

    $objeto->verDados();

?>