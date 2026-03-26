<?php
class Moto extends Carro {
    private bool $temCarenagem;
    
    public function __construct(string $marca, string $modelo, int $ano, bool $temCarenagem) {
        parent::__construct($marca, $modelo, $ano);
        $this->temCarenagem = $temCarenagem;
    }
    
    // Método específico de moto
    public function empinar(): void {
        if ($this->estaLigado()) {
            echo "{$this->getInfo()} empinou! Cuidado!<br>";
        } else {
            echo "Ligue a moto primeiro!<br>";
        }
    }
    
    // Sobrescrevendo método
    public function acelerar(int $valor): void {
        parent::acelerar($valor * 2); // Moto acelera mais rápido
        echo "*Barulho de moto esportiva*<br>";
    }

    public function getCarenagem(): string {
        return $this->temCarenagem ? "Sim" : "Não";
    }
}
?>