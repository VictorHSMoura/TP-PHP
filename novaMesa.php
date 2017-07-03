<!-- Página para criação de novas mesas -->
<?php
require "classes.php";
echo "1";
$arquivo = fopen("dbMesas.json", "r");
echo "2";
$json = "";
echo "3";
while(!feof($arquivo)) $json .= fgets($arquivo);
echo "4";
fclose($arquivo);
echo "5";
$todasAsMesas = json_decode($json);
echo "6";
$novaMesa = new Mesa();
echo "7";
array_push($todasAsMesas, $novaMesa);
echo "8";
$arquivo = fopen("dbMesas.json", "w");
echo "9";
fwrite($arquivo, json_encode($todasAsMesas, JSON_PRETTY_PRINT));
echo "0";
fclose($arquivo);
echo "missao dada eh missao cumprida";
?>
<!DOCTYPE>
<html>
    <head>
        <title>Nova mesa</title>
    </head>
    <body>
        <h1>Página para criar novas mesas</h1>
        <h2><strong>WORK IN PROGRESS</strong></h2>
        <h2>Enquanto você não estava olhando, o faker fez o trabalho. Volte e admire os resultados</h2>        
    </body>
    <?php include "footer.inc"; ?>
</html>