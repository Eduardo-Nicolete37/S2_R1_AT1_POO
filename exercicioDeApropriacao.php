<?php 
// EXERCÍCIOS DE APROPRIAÇÃO
// 1. Atributos public podem ser acessados de todos os lugares do código, já o private só pode ser usado pelo seus metódos
// 2. Receberemos um fatal error, não sendo permitido
// 3. É chamado automáticamente no momento em que uma classe é instanciada

class Product {
    private string $name;
    private float $preco;

    
    public function __construct($name, $preco)
    {
        $this->name = $name;
        $this->preco = $preco;
    }
    // Funções relacionadas ao READ

    public function getName(){
        return $this->name;
    }
    public function getPreco(){
        return $this->preco;
    }
}

$c1 = new Product("Arroz", 34.99);
echo "Produto 1: <br>";
echo $c1-> getName() . "<br>";
echo $c1-> getPreco() . "<hr>";
$c2 = new Product("Feijão", 14.99);
echo "Produto 2: <br>";
echo $c2-> getName() . "<br>";
echo $c2-> getPreco() . "<hr>";

// DESAFIO PROFISSIONAL:
//1. Dentro do metódo "verificaCPF", que deve fazer o calculo e devolver um booleano se é valido ou não
?>