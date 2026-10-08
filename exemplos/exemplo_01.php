<?php

class Carro{
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $temTetoSolar;

    public function ligar(){
        echo 'O carro ligou...<br>';
    }

    public function acelerar($velocidadeCarro){
        $this->velocidade = $this->velocidade + $velocidadeCarro;
        echo "O carro acelerou<br>";
        echo "Velocidade do carro: " . $this->velocidade . "Km/h <br>";
    }
    public function frear($frearCarro){
        $this->velocidade = $this->velocidade - $frearCarro;
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }

        echo "O carro freou<br>";
        echo "Velocidade do carro: " . $this->velocidade . "Km/h <br>";
    }
    public function desligar(){
        while ($this->velocidade > 0){
            $this->frear(10);
        }
        echo 'O carro foi desligado';
    }
}
$carro1 = new Carro();

$carro1 -> modelo = 'Astra';
$carro1 -> cor = 'Preto';
$carro1 -> marca = 'Chevrolet';
$carro1 -> velocidade = 0;
$carro1 -> temTetoSolar = false;

// var_dump($carro1);

$carro2 = new Carro();

$carro2 -> modelo = 'Chevette';
$carro2 -> cor = 'Roxo';
$carro2 -> marca = 'Chevrolet';
$carro2 -> velocidade = 0;
$carro2 -> temTetoSolar = true;

// echo '<br>';
// var_dump($carro2);

echo '<p>Modelo do carro 1:' . $carro1->modelo . '</p>';
echo '<p>Cor do carro 1:' . $carro1->cor . '</p>';
echo '<p>Marca do carro 1:' . $carro1->marca . '</p>';
echo '<p>Velocidade do carro 1:' . $carro1->velocidade . 'Km/h</p>';
echo '<p>Tem teto solar no carro 1:' . ($carro1->temTetoSolar ? 'Tem teto solar' : 'Não tem teto solar'). '</p>';

echo'<hr>';

echo '<p>Modelo do carro 2:' . $carro2->modelo . '</p>';
echo '<p>Cor do carro 2:' . $carro2->cor . '</p>';
echo '<p>Marca do carro 2:' . $carro2->marca . '</p>';
echo '<p>Velocidade do carro 2:' . $carro2->velocidade . 'Km/h</p>';
echo '<p>Tem teto solar no carro 2:' . ($carro2->temTetoSolar ? 'Tem teto solar' : 'Não tem teto solar'). '</p>';

echo '<hr>';

$carro1->ligar();
echo '<br>';

$carro1->acelerar(50);
echo '<br>';
$carro1->acelerar(100);
echo '<br>';

$carro1->frear(20);
echo '<br>';

$carro1->desligar();

echo '<hr>';

$carro2->ligar();
echo '<br>';

$carro2->acelerar(80);
echo '<br>';
$carro2->acelerar(60);
echo '<br>';

$carro2->frear(20);
echo '<br>';

$carro2->desligar();
