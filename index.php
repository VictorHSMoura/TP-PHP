<!-- Página principal. Mostra o usuário logado, as notificaçÕes dele, sua mesas, a busca de mesas e a opção de criar mesas -->

<!-- SÓ FUNCIONA COM O FAKER NA PASTA ESPECIFICADA -->
<!-- Precisamos melhorar *demais* o CSS -->
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
                <form method="get" action="me.php">
                    <button type="submit">Ver perfil</button>
                </form>
                <h3>Minhas mesas:</h3>
                <ul>
                    <li><a href="pgMesa.php">Mesa 1</a></li>
                    <li><a href="pgMesa.php">Mesa 2</a></li>
                    <li><a href="pgMesa.php">Mesa 3</a></li>
                </ul>
            </div>
        </div>
        <div class="coluna principal">
            <form method="get" action="novaMesa.php">
                <button type="submit">Criar mesa</button>
            </form>
            <div class="title">
                <h2>Mesas na área:</h2>
            </div>
            <?php listaMesas(); ?>
        </div>
        <div class="coluna sidebar">
            <div class="title">
            <h2>Suas notificações:</h2>
            <ul>
                <li>Horário de Mesa 1 foi alterado</li>
                <li>Jogador _D4rk_S0rc3r3r_ saiu da mesa 2</li>
                <li>O mestre Krysvera te convidou para a mesa 4</li>
            </ul>
            </div>
        </div>
    </body>
    <?php include "footer.inc"; ?>
</html>