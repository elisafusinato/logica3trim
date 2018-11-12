<?php

class Funcionario{

    public $departamento;
    public $salario;
    public $CPF;

    // $dataEntrada vem da classe Data
    public $dataEntrada;

    public function recebeAumento(){

        $salaAumento = $this->salario + (0.1 * $this->salario);

        return $salaAumento;
    }

    public function calculaGanhoAnual(){

        $ganhoAnual = $this->salario * 12;

        return $ganhoAnual;

    }

    public function mostra(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->mostra()}, possui salário de R$ {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();

    }

}

