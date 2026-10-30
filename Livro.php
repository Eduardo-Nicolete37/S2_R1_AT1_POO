<?php 
class Book {// Classe: livro
    // Atributos de um livro
    private string $name;
    private int $pages;
    private string $author;
    private float $cost;
    private string $trecho;

    // Função __contruct
    public function __construct(string $name, int $pages, string $author, float $cost, string $trecho){
        $this->name = $name;
        $this->pages = $pages;
        $this->author = $author;
        $this->cost = $cost;
        $this->trecho = $trecho;
    }

    // Funções relacionadas a READ

    public function getName(){
        return $this->name;
    }
    public function getPages(){
        return $this->pages;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getCost(){
        return $this->cost;
    }
    public function getTrecho(){
        return $this->trecho;
    }

    public function showALL(){
        echo "<hr> Atributos do Livro: <br>";
        echo "Nome: " . $this->name . "<br>";
        echo "Autor(a): " . $this->author . "<br>";
        echo "Páginas: " . $this->pages . "<br>";
        echo "Custo: " . $this->cost . "<br>";
        echo "Trecho do Livro: " . $this->trecho . "<hr>";
    }

    // Funções relacionadas a CREATE

    public function setName($name){
        $this->name = $name;
    }
    public function setPages($pages){
        $this->pages = $pages;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function setCost($cost){
        $this->cost = $cost;
    }
    public function setTrecho($trecho){
        $this->trecho = $trecho;
    }

    // Funções Funcionais
    
    public function lerTrechoDoLivro(){
        echo "Trecho: '" . $this->trecho . "'";
    }

    public function rasgarLivro() {
        $total_len = strlen($this->trecho);
        $metade = ceil($total_len / 2); 
        $primeira = mb_substr($this->trecho, 0, $metade, 'UTF-8');
        $segunda = mb_substr($this->trecho, $metade, null, 'UTF-8');
        echo "Trecho rasgado no meio! <br>";
        echo "Parte 1: " . $primeira . " (RASGADO) <br>";
        echo "Parte 2: " . $segunda;
    }
}

$livroNovo = new Book("Harry Potter e o Enigma do Príncipe", 536, "J.K Rowling", 67.89,"Não tenha pena dos mortos, Harry. Tenha pena dos vivos.");
$livroNovo-> showALL();
$livroNovo-> rasgarLivro();




?>