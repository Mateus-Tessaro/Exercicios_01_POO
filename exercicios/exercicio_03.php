<?php

class SalaAula{
    public string $disciplina;
    public string $professor;
    public int $duracao;
    public int $numero_sala;
    public int $bloco;
    
    public function exibirInformacoes(){
        echo '<p>Titular do banco 1:' . $this->disciplina . '</p>';
        echo '<p>Número do banco 1:' . $this->professor . '</p>';
        echo '<p>Saldo do banco 1:' . $this->numero_sala . '</p>';
        echo '<p>Tipo do banco 1:' . $this->duracao . 'min </p>';
        echo '<p>Tipo do banco 1:' . $this->bloco . 'º </p>';
    }
    public function trocarProfessor($nomeProfessor){
        $this->professor = $nomeProfessor;
        echo 'Troca realizada com sucesso...<br>';
        echo $this->professor;
    }
    public function trocarLocal($n_sala,$n_bloco){
        $this->numero_sala = $n_sala;
        $this->bloco = $n_bloco;
        echo 'Troca realizada com sucesso...<br>';
        echo $this->numero_sala;
        echo'<br>';
        echo $this->bloco;
    }
    
}
$sala1 = new SalaAula();

$sala1-> disciplina = 'Matemática';
$sala1-> professor = 'Cleide';
$sala1-> duracao = 67;
$sala1-> bloco = 1;
$sala1-> numero_sala = 1;


$sala2 = new SalaAula();

$sala2-> disciplina = 'História';
$sala2-> professor = 'Renato';
$sala2-> duracao = 67;
$sala2-> bloco = 2;
$sala2-> numero_sala = 1;


echo '<hr>';

$sala1->exibirInformacoes();
echo '<br>';
$sala1->trocarProfessor('Adalberto');
echo '<br>';
$sala1->trocarLocal(3,2);
echo '<br>';

echo '<hr>';

$sala2->exibirInformacoes();
echo '<br>';
$sala2->trocarProfessor('Halberto');
echo '<br>';
$sala2->trocarLocal(2,1);
echo '<br>';