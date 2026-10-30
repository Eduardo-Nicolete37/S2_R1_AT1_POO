<?php 
// Cria a classe Cliente:

class Cliente {
    private string $name;
    private string $email;
    private string $cpf;


    public function __construct($name, $email, $cpf)
    {
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
    }
    // Funções de READ
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getCPF() {
        return $this->cpf;
    }

    public function getAll() {
        echo "Dados do Cliente: <br>";
        echo $this->name . "<br>";
        echo $this->email . "<br>";
        echo $this->cpf . "<br>";
    }

    // Funções de CREATE
    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }
}

$newCliente = new Cliente("Ademilson", "ademilSON@proton.com", "123.456.789.10");
$newCliente->getAll();
?>