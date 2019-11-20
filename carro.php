<?php 
echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
";
echo "</head>";

class Veiculo {
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $fabricante;

    public function __construct($marca, $modelo, $cor, $ano, $fabricante){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->fabricante= $fabricante;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($novaMarca){
        $this->marca = $novaMarca;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($novoModelo){
        $this->modelo = $novoModelo;
    }

    public function getAno() {
        return $this->ano;
    }
    public function setAno($novoAno){
        $this->ano = $novoAno;
    }

    public function getCor() {
        return $this->cor;
    }
    public function setCor($novaCor) {
        $this->cor = $novaCor;
    }

    public function getFabricante() {
        return $this->fabricante;
    }
    public function setFabricante($novoFabricante) {
        $this->fabricante= $novoFabricante;
    }

    public function ignicao() {
        return 'ligar veiculo - partida eletrica';
    }

    public function consumo_medio() {
        return 'Consumo medio: Calcular';
    }
}
class Carro extends Veiculo {

    public $numero_portas;

    public function __construct($marca, $modelo, $cor, $ano, $fabricante, $numero_portas){
        parent::__construct($marca, $modelo, $cor, $ano, $fabricante);
        $this->numero_portas = $numero_portas;
    }

    public function getPortas() {
        return $this->numero_portas;
    }
    public function setPortas($novaPorta) {
        $this->numero_portas = $novaPorta;
    }
    
    public function ignicao() {
        return 'Carro ligado';
    }
}

class Motocicleta extends Veiculo {
    public $cilindrada;
    public $tipo_partida;

    public function __construct($marca, $modelo, $cor, $ano, $fabricante, $cilindrada, $tipo_partida){
        parent::__construct($marca, $modelo, $cor, $ano, $fabricante);
        $this->cilindrada = $cilindrada;
        $this->tipo_partida = $tipo_partida;

    }

    public function getCilindrada() {
        return $this->cilindrada;
    }
    public function setCilindrada($novoCilindrada) {
        $this->cilindrada=$novoCilindrada;
    }

    public function getPartida() {
        return $this->tipo_partida;
    }
    public function setPartida($novoPartida) {
        $this->tipo_partida= $novoPartida;
    }

    public function ignicao() {
        return 'Moto ligada';
    }
}

class Caminhao extends Veiculo {
    public $numeroEixo;

    public function __construct($marca, $modelo, $cor, $ano, $fabricante, $numeroEixo){
        parent::__construct($marca, $modelo, $cor, $ano, $fabricante);
        $this->numeroEixo = $numeroEixo;
    }

    public function getEixo() {
        return $this->numeroEixo;
    }
    public function setFabricante($novoEixo) {
        $this->numeroEixo= $novoEixo;
    }
    
    public function ignicao() {
        return 'Caminhao ligado';
    }
}
	
	
$palio = new Carro('Fiat', 'Palio', 'branco', 2000, 'Fiat', 4);
$cg125 = new Motocicleta('Honda', 'CG125', 'Amarelo', 2019, 'Honda', 124.7, "Pedal");
$Atron = new Caminhao('Mercedes', 'Atron', 'Prata', 2019, 'Mercedes', 4);

echo "<b>Carro</b> <hr>";
echo "<b>Modelo:</b>" . $palio->getModelo() . "<br>";
echo "<b>Marca:</b>" . $palio->getMarca() . "<br>";
echo "<b>Cor:</b>" . $palio->getCor() . "<br>";
echo "<b>Ano:</b>" . $palio->getAno() . "<br>";
echo "<b>Fabricante:</b>" . $palio->getFabricante() . "<br>";
echo "<b>Numero de portas:</b>" . $palio->getPortas() . "<br><br>";
echo "<b>Ignição:</b>" . $palio->ignicao() . "<hr>";

echo "<br><br>";

echo "<b>Moto</b> <hr>";
echo "<b>Modelo:</b>" . $cg125->getModelo() . "<br>";
echo "<b>Marca:</b>" . $cg125->getMarca() . "<br>";
echo "<b>Cor:</b>" . $cg125->getCor() . "<br>";
echo "<b>Ano:</b>" . $cg125->getAno() . "<br>";
echo "<b>Fabricante:</b>" . $cg125->getFabricante() . "<br>";
echo "<b>Cilindrada:</b>" . $cg125->getCilindrada() . "<br>";
echo "<b>Tipo de partida:</b>" . $cg125->getPartida() . "<br><br>";
echo "<b>Ignição:</b>" . $cg125->ignicao() . "<hr>";

echo "<br><br>";

echo "<b>Caminhao</b> <hr>";
echo "<b>Modelo:</b>" . $Atron->getModelo() . "<br>";
echo "<b>Marca:</b>" . $Atron->getMarca() . "<br>";
echo "<b>Cor:</b>" . $Atron->getCor() . "<br>";
echo "<b>Ano:</b>" . $Atron->getAno() . "<br>";
echo "<b>Fabricante:</b>" . $Atron->getFabricante() . "<br>";
echo "<b>Numero de eixos:</b>" . $Atron->getEixo() . "<br><br>";
echo "<b>Ignição:</b>" . $Atron->ignicao() . "<hr>";


?>