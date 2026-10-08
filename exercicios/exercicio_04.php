    <?php

class Pedido{
    public int $numero;
    public string $cliente;
    public int $valor;
    public string $status;
    
    public function adicionarItem($valor){
        $this->valor = $this->valor + $valor;
        echo $this->valor;
    }
    public function cancelar(){
        $this->status = 'Cancelado';
        echo $this->status;
    }
    public function finalizar(){
        $this->status = 'Finalizado';
        echo $this->status;
    }
    public function exibirResumo(){
        echo "<p>Número: ".$this->numero." </p>";
        echo "<p>Cliente: ".$this->cliente." </p>";
        echo "<p>Valor: ".$this->valor." </p>";
        echo "<p>Status: ".$this->status." </p>";
    }
    
}
$pedido1 = new Pedido();

$pedido1-> numero = 5;
$pedido1-> cliente = 'Cleide';
$pedido1-> valor = 67;
$pedido1-> status = 'Aguardando';


$pedido2 = new Pedido();

$pedido2-> numero = 5;
$pedido2-> cliente = 'Laura';
$pedido2-> valor = 7;
$pedido2-> status = 'Aguardando';


echo '<hr>';

$pedido1->adicionarItem(20);
echo '<br>';
$pedido1->cancelar();
echo '<br>';
$pedido1->exibirResumo();
echo '<br>';

echo '<hr>';

$pedido2->adicionarItem(20);
echo '<br>';
$pedido2->finalizar();
echo '<br>';
$pedido2->exibirResumo();
echo '<br>';