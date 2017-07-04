<!-- Funções para manipular e exibir conjuntos de mesas -->

<!-- TODA FUNÇÃO QUE TRABALHE COM UMA MESA INDIVIDUAL DEVE SER DA CLASSE MESA-->
<!-- APENAS FUNÇÕES QUE LIDEM COM CONJUNTOS DE MESAS AQUI -->
<?php
require "classes.php";

function listaMesas(){
    $arquivo = fopen("dbMesas.json", "r");
    $json = "";
    while(!feof($arquivo)) $json .= fgets($arquivo);
    fclose($arquivo);
    $todasAsMesas = json_decode($json);
    foreach ($todasAsMesas as $mesinha) {
        $mesaProvisoria = new Mesa();

        //Código provisório. Quando o faker for tirado, tudo poderá ser feito pelo construtor
        $mesaProvisoria->nome = $mesinha->nome;
        $mesaProvisoria->mestre = $mesinha->mestre;
        $mesaProvisoria->endereco = $mesinha->endereco;
        $mesaProvisoria->sinopse = $mesinha->sinopse;
        $mesaProvisoria->genero = $mesinha->genero;
        $mesaProvisoria->sistema = $mesinha->sistema;
        //Fim do código provisório
        
        //var_dump($mesaProvisoria);
        $mesaProvisoria->mostraMesa($mesaProvisoria); ?>
        <form method="post" action="pgMesa.php">
            <button type="submit">Detalhes</button>
        </form> <?php
    }
}
?>