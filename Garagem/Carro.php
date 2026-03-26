<?php
class Carro {
    // Atributos (características)
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $velocidade;
    private bool $ligado;
    
    // Construtor (inicializa o carro)
    public function __construct(string $marca, string $modelo, int $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidade = 0;
        $this->ligado = false;
    }
    
    // Métodos (ações)
    public function ligar(): void {
        if (!$this->ligado) {
            $this->ligado = true;
            echo "{$this->marca} {$this->modelo} ligado!<br>";
        } else {
            echo "O carro já está ligado!<br>";
        }
    }
    
    public function desligar(): void {
        if ($this->velocidade > 0) {
            echo "Não pode desligar em movimento! Reduza a velocidade primeiro.<br>";
        } else {
            $this->ligado = false;
            echo "{$this->marca} {$this->modelo} desligado.<br>";
        }
    }
    
    public function acelerar(int $valor): void {
        if (!$this->ligado) {
            echo "Ligue o carro primeiro!<br>";
            return;
        }
        
        $this->velocidade += $valor;
        echo "Acelerando! Velocidade atual: {$this->velocidade} km/h<br>";
    }
    
    public function freiar(int $valor): void {
        $this->velocidade -= $valor;
        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }
        echo "Freando! Velocidade atual: {$this->velocidade} km/h<br>";
    }
    
    // Getters (para acessar informações privadas)
    public function getInfo(): string {
        return "{$this->marca} {$this->modelo} - {$this->ano}<br>";
    }
    
    public function getVelocidade(): float {
        return $this->velocidade;
    }
    
    public function estaLigado(): bool {
        return $this->ligado;
    }
}
?>