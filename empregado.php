<?php

/**
 * Implementar a classe estagiario
 * classe empregadoCLT
 * classe terceirizado
 * classe folha de pagamento - como se fosse o veiculo 
 */

interface Remuneravel {
    public function remuneracao();

}

class estagiario implements Remuneravel {
    public $salario = 500;

    public function remuneracao() {
        $this->salario *= 2;
    }
}

class FolhaDePagamento {
    public Remuneravel $funcionario;

    public function pagar(Remuneravel $funcionario) {
        $this->funcionario = $funcionario;
        $this->funcionario->remuneracao();
    }

    public function __toString() {
        return "O salário é: {$this->funcionario->salario}<br>";
    }
}

$estagiario = new Estagiario();

$folha = new FolhaDePagamento();
$folha->pagar($estagiario);
echo $folha;
