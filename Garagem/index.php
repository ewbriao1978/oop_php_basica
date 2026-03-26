<?php
require_once 'Carro.php';
require_once 'Moto.php';
require_once 'Garagem.php';

// Limpar tela (opcional)
echo "\n================== PROGRAMA DE VEÍCULOS ==================\n\n";

// Criando veículos
echo "1. CRIANDO VEÍCULOS<br>";
echo "----------------------------------------<br>";
$carro1 = new Carro("Fiat", "Uno", 2020);
$carro2 = new Carro("Chevrolet", "Onix", 2022);
$moto1 = new Moto("Honda", "CG 160", 2023, true);

echo "✓ Carro 1: " . $carro1->getInfo() . "<br>";
echo "✓ Carro 2: " . $carro2->getInfo() . "<br>";
echo "✓ Moto: " . $moto1->getInfo() . "<br><br>";

// Criando garagem
echo "2. CRIANDO GARAGEM<br>";
echo "----------------------------------------<br>";
$garagem = new Garagem();
$garagem->estacionar($carro1);
$garagem->estacionar($carro2);
$garagem->estacionar($moto1);
echo "<br>";

// Listando veículos na garagem
$garagem->listarVeiculos();

// Testando funcionalidades do carro
echo "3. TESTANDO CARRO<br>";
echo "----------------------------------------<br>";
$carro1->ligar();
$carro1->acelerar(30);
$carro1->acelerar(20);
$carro1->freiar(25);
echo "Velocidade atual: " . $carro1->getVelocidade() . " km/h<br>";
$carro1->desligar(); // Não vai deixar pois está em movimento
$carro1->freiar(25);
$carro1->desligar(); // Agora vai
echo "<br>";

// Testando funcionalidades da moto
echo "4. TESTANDO MOTO<br>";
echo "----------------------------------------<br>";
$moto1->ligar();
$moto1->acelerar(20); // Moto acelera o dobro
$moto1->empinar();
$moto1->freiar(30);
$moto1->desligar();
echo "Tem carenagem? " . $moto1->getCarenagem() . "<br>";
echo "<br>";

// Testando array de veículos na garagem
echo "5. ACESSANDO VEÍCULOS DA GARAGEM<br>";
echo "----------------------------------------<br>";
echo "Total de veículos: " . $garagem->getTotalVeiculos() . "<br><br>";

echo "Primeiro veículo: " . $garagem->getVeiculo(0)->getInfo() . "<br>";
echo "Segundo veículo: " . $garagem->getVeiculo(1)->getInfo() . "<br>";
echo "Terceiro veículo: " . $garagem->getVeiculo(2)->getInfo() . "<br><br>";

$terceiroVeiculo = $garagem->getVeiculo(2);
if ($terceiroVeiculo instanceof Moto) {
    echo "Tem carenagem? " . $terceiroVeiculo->getCarenagem() . "<br>";
}

echo "<br>================== FIM DO PROGRAMA ==================<br>";
?>