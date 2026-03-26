<?php
class Garagem {
    private array $veiculos = [];
    
    // Adicionar veículo à garagem
    public function estacionar(Carro $veiculo): void {
        $this->veiculos[] = $veiculo;
        echo "{$veiculo->getInfo()} estacionado na garagem!<br>";
    }
    
    // Listar todos os veículos
    public function listarVeiculos(): void {
        if (empty($this->veiculos)) {
            echo "Garagem vazia!<br>";
            return;
        }
        
        echo "<br>=== VEÍCULOS NA GARAGEM ===<br>";
        foreach ($this->veiculos as $i => $veiculo) {
            echo ($i + 1) . ". " . $veiculo->getInfo() . "<br>";
        }
        echo "============================<br><br>";
    }
    
    // Buscar veículo por índice
    public function getVeiculo(int $indice): ?Carro {
        if (isset($this->veiculos[$indice])) {
            return $this->veiculos[$indice];
        }
        return null;
    }
    
    // Quantidade de veículos
    public function getTotalVeiculos(): int {
        return count($this->veiculos);
    }
}
?>