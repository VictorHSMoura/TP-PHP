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
    foreach ($mesinha as $todasAsMesas) $mesinha->mostraMesa();
}
?>