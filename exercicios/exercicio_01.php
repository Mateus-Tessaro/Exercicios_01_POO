<?php

class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $status;
    
    public function ligar(){
        $this->status = true;
        echo 'O celular está ligando... <br>';
        echo 'LIGADO!';
    }
    public function desligar(){
        $this->status = true;
        echo 'O celular está desligando... <br>';
        echo 'DESLIGADO!';
    }
    public function user($consumo){
        $this->bateria = $this->bateria - $consumo;
        if($this->bateria < 0){
            $this->bateria = 0;
        }
        echo 'Bateria = ' . $this->bateria;
    }
    public function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria = 100;
        }
        echo 'Bateria = ' . $this->bateria;
    } 
}
$celular1 = new Celular();

$celular1-> modelo = 'iPhone';
$celular1-> cor = 'Preto';
$celular1-> marca = 'Apple';
$celular1-> bateria = 89;
$celular1-> status = false;


$celular2 = new Celular();

$celular2 -> modelo = 'J7 Prime';
$celular2 -> cor = 'Roxo';
$celular2 -> marca = 'Sansung';
$celular2 -> bateria = 33;
$celular2 -> status = true;


echo '<p>Modelo do celular 1:' . $celular1->modelo . '</p>';
echo '<p>Cor do celular 1:' . $celular1->cor . '</p>';
echo '<p>Marca do celular 1:' . $celular1->marca . '</p>';
echo '<p>Bateria do celular 1:' . $celular1->bateria . '</p>';
echo '<p>Status do celular 1:' . ($celular1->status ? 'Ligado' : 'Desligado'). '</p>';

echo'<hr>';

echo '<p>Modelo do celular 2:' . $celular2->modelo . '</p>';
echo '<p>Cor do celular 2:' . $celular2->cor . '</p>';
echo '<p>Marca do celular 2:' . $celular2->marca . '</p>';
echo '<p>Bateria do celular 2:' . $celular2->bateria . '</p>';
echo '<p>Status do celular 2:' . ($celular2->status ? 'Ligado' : 'Desligado'). '</p>';

echo '<hr>';

$celular1->ligar();
echo '<br>';
$celular1->desligar();
echo '<br>';
$celular1->ligar();
echo '<br>';

$celular1->user(20);
echo '<br>';
$celular1->carregar(200);
echo '<br>';
$celular1->user(200);
echo '<br>';

echo '<hr>';

$celular2->desligar();
echo '<br>';
$celular2->ligar();
echo '<br>';

$celular2->user(100);
echo '<br>';
$celular1->carregar(200);
echo '<br>';
$celular1->user(20);
echo '<br>';
