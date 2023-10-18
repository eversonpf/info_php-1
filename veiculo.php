<?php

interface IVeiculo {
    public function dirigir($chave);
}

abstract class Veiculo implements IVeiculo {
    public function dirigir($chave) {
        /*
        colocar cinto
        colocar ponto morto
        */
        echo "estou dirigindo...{$chave} <br>";
    }
} // coisas comuns coloca em abstract

class Carro extends Veiculo {
    public $chave = "chave_presencial...<br>";

    public function andar() {
        $this->dirigir($this->chave);
        echo "estou andando...<br>";
    }
}

class Trator extends Veiculo {
    public $chave = "chave_normal";

    public function arrar() {
        $this->dirigit($this->chave);
    }
}

class Carreta extends Veiiculo {
    public $chave = "chave_canivete";

    public function viajar() {
        $this->verificarOleoMotor();
        $this->dirigir($this->chave);
    }

    public function verificarOleoMotor() {
    }
}

$carro = new Carro();
$carro->andar();
$carro->verificarOleoMotor();
