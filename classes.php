<!-- Declaração das classes mesa e usuário -->
<?php
class Mesa {
    static $numMesas =0;

    var $id;
    var $nome;
    var $mestre;
    var $endereco;
    var $sinopse;
    var $genero;
    var $sistema;
    var $jogadores; //Vetor dos IDs dos usuários membros da mesa

    /*
    function __construct($nome, $mestre, $endereco, $sinopse, $genero, $sistema){
        $this->id = $numMesas;
        $numMesas++;
        $this->nome = $nome;
        $this->mestre = $mestre;
        $this->endereco = $endereco;
        $this->sinopse = $sinopse;
        $this->genero = $genero;
        $this->sistema = $sistema;
    }
    */

    //Construct provisório com o faker
    function __construct(){
        require_once '../_BIBLIOTECAS/Faker/src/autoload.php';
        $faker = Faker\Factory::create();
        $this->id = $numMesas;
        $numMesas++;
        $this->nome = $faker->name;
        $this->mestre = $faker->name;
        $this->endereco = $faker->address;
        $this->sinopse = $faker->text;
        $this->genero = $faker->name;
        $this->sistema = $faker->name;
        $this->mostraMesa();
    }

    function mostraMesa(){ //Exibição resumida da mesa: apenas nome, endereço e sinopse
        ?>
        <h3><?=$this->nome?></h3>
        <p><strong>Endereço: </strong><?=$this->endereco?></p>
        <p><?=$this->sinopse?></p>
        <?php
    }
}

class Usuario {
    static $numUsuarios = 0;

    var $id;
    var $nome;
    var $login;
    var $email;
    var $senha;

    function __construct($nome, $login, $email, $senha){
        $this->id = $numUsuarios;
        $numUsuarios++;
        $this->nome = $nome;
        $this->login = $login;
        $this->email = $email;
        $this->senha = $senha;
    }
}
?>