<?php
class Aluno {
    private string $nome;
    private array $notas = [];
    
    public function __construct(string $nome) {
        $this->nome = $nome;
    }
    
    public function adicionarNota(float $nota): void {
        if ($nota >= 0 && $nota <= 10) {
            $this->notas[] = $nota;
            echo "Nota $nota adicionada para {$this->nome}<br>";
        } else {
            echo "Nota inválida! Deve ser entre 0 e 10.<br>";
        }
    }
    
    public function calcularMedia(): float {
        if (empty($this->notas)) {
            return 0;
        }
        
        $soma = 0;
        foreach ($this->notas as $nota) {
            $soma += $nota;
        }
        return $soma / count($this->notas);
    }
    
    public function getSituacao(): string {
        $media = $this->calcularMedia();
        
        if ($media >= 7) {
            return "APROVADO";
        } elseif ($media >= 5) {
            return "RECUPERAÇÃO";
        } else {
            return "REPROVADO";
        }
    }
    
    public function getInfo(): string {
        return "Aluno: {$this->nome} | Média: " . number_format($this->calcularMedia(), 1) . 
               " | Situação: {$this->getSituacao()}<br>";
    }
}

// Teste do Aluno
echo "=== SISTEMA DE NOTAS ===<br><br>";

$aluno1 = new Aluno("Joãozinho");
$aluno1->adicionarNota(8.5);
$aluno1->adicionarNota(7.0);
$aluno1->adicionarNota(9.0);
echo $aluno1->getInfo() . "\n\n";

$aluno2 = new Aluno("Mariazinha");
$aluno2->adicionarNota(5.5);
$aluno2->adicionarNota(4.0);
$aluno2->adicionarNota(6.0);
echo $aluno2->getInfo() . "\n\n";

$aluno3 = new Aluno("Pedrinho");
$aluno3->adicionarNota(2.5);
$aluno3->adicionarNota(3.0);
echo $aluno3->getInfo() . "\n";
?>