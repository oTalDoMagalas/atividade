<?php

class Pessoa {
    // nome 
    private $nome;

    public function __construct($nome) {
        $this->setNome($nome); 
    }

  
    public function getNome() {
        return $this->nome;
    }


    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function falar($mensagem) {
        echo "{$this->getNome()}: {$mensagem}\n";
    }
}

class Aluno extends Pessoa {
    public function conversarComProfessor() {
        $this->falar("Oi pessoal, tudo bem?");
    }
}

class Professor extends Pessoa {
    public function responderAluno() {
        $this->falar("Oi, tudo ótimo! E você, estudando bastante?");
    }
}

class Diretor extends Pessoa {
    public function cumprimentar() {
        $this->falar("Bom dia, pessoal! Como foi a aula ontem? Eu faltei.");
    }
}

class Funcionario extends Pessoa {
    public function responderDiretor() {
        $this->falar("Bom dia, tudo correndo bem, graças a Deus.");
    }
}


$aluno = new Aluno("gustavo");
$professor = new Professor("Mariana");
$diretor = new Diretor("rafael");
$funcionario = new Funcionario("raul");

// Conversas
$aluno->conversarComProfessor();
$professor->responderAluno();



$diretor->cumprimentar();
$funcionario->responderDiretor();

?>
