<?php

class Pessoa {
    private $nome;
    private $idade;
    private $email;
    private $telefones = [];

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function adicionarTelefone($telefone) {
        $this->telefones[] = $telefone;
    }

    public function obterTelefones() {
        return $this->telefones;
    }

    public function exibir() {
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Telefones: " . implode(", ", $this->telefones) . "\n";
    }
}

// Exemplo de uso:
$pessoa = new Pessoa();
$pessoa->setNome("Eduardo");
$pessoa->setIdade(30);
$pessoa->setEmail("eduardo@example.com");
$pessoa->adicionarTelefone("11999999999");
$pessoa->adicionarTelefone("1133333333");

$pessoa->exibir();


//
$pessoas = [];
$pessoas[] = $pessoa;

$pessoa2 = new Pessoa();
$pessoa2->setNome("Maria");
$pessoa2->setIdade(28);
$pessoa2->setEmail("maria@example.com");
$pessoa2->adicionarTelefone("11988888888");
$pessoas[] = $pessoa2;

$pessoa3 = new Pessoa();
$pessoa3->setNome("João");
$pessoa3->setIdade(35);
$pessoa3->setEmail("joao@example.com");
$pessoa3->adicionarTelefone("11977777777");
$pessoa3->adicionarTelefone("1144444444");
$pessoas[] = $pessoa3;

echo "\n=== Listando todas as pessoas ===\n\n";
foreach ($pessoas as $p) {
    $p->exibir();
    echo "\n";
}
