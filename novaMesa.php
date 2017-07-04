<!-- Página para criação de novas mesas -->
<?php
require "classes.php";
$arquivo = fopen("dbMesas.json", "r");
$json = "";
while(!feof($arquivo)) $json .= fgets($arquivo);
fclose($arquivo);
$todasAsMesas = json_decode($json);
$novaMesa = new Mesa();
array_push($todasAsMesas, $novaMesa);
$arquivo = fopen("dbMesas.json", "w");
fwrite($arquivo, json_encode($todasAsMesas, JSON_PRETTY_PRINT));
fclose($arquivo);
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