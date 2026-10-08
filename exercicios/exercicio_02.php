<?php

class ContaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;
    
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo 'Valor Depositado: ' . $valor . '<br>';
        echo 'Valor Total: ' . $this->saldo;
    }
    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo 'Valor Depositado: ' . $valor . '<br>';
        echo 'Valor Total: ' . $this->saldo;
    }
    public function consultar(){
        echo 'Consultando...';
        echo 'Valor Total: ' . $this->saldo;
    }
}
$conta1 = new ContaBancaria();

$conta1-> titular = 'Daniel Vorcaro';
$conta1-> numero = '22';
$conta1-> saldo = 6713.22;
$conta1-> tipo = 'Poupança';


$conta2 = new ContaBancaria();

$conta2-> titular = 'Daniel Volcalo';
$conta2-> numero = '23';
$conta2-> saldo = 67130000000000.22;
$conta2-> tipo = 'Corrente';


echo '<p>Titular do banco 1:' . $conta1->titular . '</p>';
echo '<p>Número do banco 1:' . $conta1->numero . '</p>';
echo '<p>Saldo do banco 1:' . $conta1->saldo . '</p>';
echo '<p>Tipo do banco 1:' . $conta1->tipo . '</p>';

echo'<hr>';

echo '<p>Titular do banco 2:' . $conta2->titular . '</p>';
echo '<p>Número do banco 2:' . $conta2->numero . '</p>';
echo '<p>Saldo do banco 2:' . $conta2->saldo . '</p>';
echo '<p>Tipo do banco 2:' . $conta2->tipo . '</p>';


echo '<hr>';

$conta1->depositar(67.0);
echo '<br>';
$conta1->sacar(22.2);
echo '<br>';
$conta1->consultar();
echo '<br>';

echo '<hr>';

$conta2->depositar(6007.0);
echo '<br>';
$conta2->sacar(20002.2);
echo '<br>';
$conta2->consultar();
echo '<br>';
