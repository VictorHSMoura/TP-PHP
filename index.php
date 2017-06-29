<?php require "mesas.inc"; ?>
<!DOCTYPE>
<html>
    <head>
        <title>GameMaster</title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
    </head>
    <body>
        <div class="coluna sidebar">
            <div class="title">
                <!-- Essa seção tá bagunçada
                        Eu queria foto, nome à direita da foto e link embaixo -->
                <img src="fotaPerfil.jpeg" class="ftPerfil">                
                <h2 class="nomePerfil">Shoveler</h2>
                <form method="get" action="novaMesa.php">
                    <button type="submit">Ver perfil</button>
                </form>

            </div>
        </div>
        <div class="coluna principal">
            <div class="title">
                <h2>Mesas na área:</h2>
            </div>
            <form method="get" action="novaMesa.php">
                <button type="submit">Criar mesa</button>
            </form>
        </div>
        <div class="coluna sidebar">
            <div class="title">
            <h2>Suas notificações:</h2>
            </div>
        </div>
    </body>
    <footer class="largo">
        subCUBE Enterprises + V&A Games Productions
    </footer>
</html>