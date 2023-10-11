<?php

    class Pessoa {
// Propriedades
    public $name;
    private $cpf;
    public $dataNascimento;
    public $andar;

    public function correr($respirar) {
        if(true){}
        if(true){}
    }

    public function caminhar($andar)
        $this->andar = $andar;
        $this->dataNascimento = $dataNascimento;


    // Método da classe
        public function fugir() {
            echo "Teste correndo";
        }

        public function parar() {
            echo "Teste parado";
        }

        public function exibirInformacoes() {
            echo "Name:". $this->name. "<br>";
            echo "Data Nascimento". $this->dataNascimento. "<br>";
        }
}

// Criação de um objeto da Classe
    $aPessoa = new Pessoa();
    $aPessoa->caminhar(10);
    echo "<br>";
    $aPessoa->exibirInformacoes();
    $aPessoa->correr();

    ?>
