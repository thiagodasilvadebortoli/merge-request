

<?php

//criando uma classe chamada carro
class carro{
    //private
    //protected
    //plubic
    //atributos da classe carro
    private $marca;
    private $modelo;

    //método construtor
    function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    function atribuirValorModelo($modelo){
        $this->modelo = $modelo;
    }

    function atribuirValorMarca($marca){
        $this->marca = $marca;
    }

    function mostrarInfo(){
        return "carro: " . $this->marca . "-" . $this->modelo;
    }

}

//criando um objeto novo
$meuCarro = new carro("GM", "Fusca");

$meuCarro2 = new carro("GM", "pagani");

$mensagem = $meuCarro->mostrarInfo();
echo $mensagem;
echo "<br>";
$mensagem = $meuCarro2->mostrarInfo();
echo $mensagem;

//criando uma class nova
class CarroEletrico extends Carro{
	
	public $autonomia; 
	
    function __construct($marca, $modelo, $autonomia){
        parent::__construct($marca, $modelo);
        $this->autonomia = $autonomia;
    }
    function mostrarAutonomia(){
        echo "Autonomia: ". $this->autonomia ."KM";
    }
   
}

$meuCarroEletrico = new CarroEletrico("tesla", "model-S", 600);
echo "<br>";
$mensagem = $meuCarroEletrico->mostrarInfo();
echo $mensagem;
$meuCarroEletrico->mostrarAutonomia();


//criar uma classe funcionario com nome e salario e aplicando capsulamento
class Funcionario{

    private $nome;
    private $salario;

       //método construtor
       function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;

    } 

    function setNome($nome){
        $this->nome = $nome;
    }

    function setSalario($salario){
        $this->salario = $salario;
    }

    function getInfo(){
        return "O funcionario: " . $this->nome . "recebe o valor de " . $this->salario;
    }

}

$funcionario = new funcionario("Thiago", 3000);
$funcionario2 = new funcionario("Caetano", 2000);

$mensagem = $funcionario->getInfo();
echo $mensagem;
echo "<br>";
$mensagem = $funcionario2->getInfo();
echo "<br>";
echo $mensagem;


//class nova no tipo de herança


?>