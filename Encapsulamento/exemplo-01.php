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

    $objeto = new Pessoa();

    //echo $objeto->nome . "<br/>";

    $objeto->verDados();

?>