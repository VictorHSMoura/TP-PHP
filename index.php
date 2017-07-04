<!-- Página principal. Mostra o usuário logado, as notificaçÕes dele, sua mesas, a busca de mesas e a opção de criar mesas -->

<!-- Precisamos melhorar *demais* o CSS -->
<?php require "mesas.inc"; ?>
<!DOCTYPE>
<html>
    <head>
        <title>GameMaster</title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset=utf-8>
    </head>
    <body>
        <div class="container-fluid">
            <div class="sidebar col-sm-2">
                <div class="title">
                    <!-- Essa seção tá bagunçada
                            Eu queria foto, nome à direita da foto e link embaixo -->
                    <div class="card">
                        <img src="fotaPerfil.jpeg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4 class="fonteBranca"><b>Shoveler</b></h4>
                        </div>
                    </div>
                    <!--<img src="fotaPerfil.jpeg" class="ftPerfil">                
                    <h3 class="nomePerfil">Shoveler</h3>-->
                    <div class="perfil">
                        <form class="pagePerfil" method="get" action="me.php">
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
            </div>
            <div class="col-sm-7">
                <form method="get" action="novaMesa.php">
                    <button type="submit">Criar mesa</button>
                </form>
                <div class="title">
                    <h2 class="center">Mesas na área:</h2>
                </div>
                <!--<?php listaMesas(); ?>-->
                <!--Provisório-->
                <p>Mesa 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit dolor sed turpis pretium bibendum. Sed eu purus in lorem consectetur cursus sit amet in purus.
                Vivamus a sem faucibus, pretium nisi eget, dictum enim. Pellentesque et est tellus. Ut consectetur ligula mauris, ultrices volutpat sem consectetur eget. Ut mattis tristique quam a euismod.
                Phasellus ultrices at odio non luctus. Curabitur ut varius sem. In a mauris nulla.</p>

                <p>Mesa 2: Vivamus non tincidunt risus. Quisque pharetra leo et nunc pharetra bibendum. Aliquam nec nibh ac neque dapibus molestie non ut nulla.
                Phasellus tortor arcu, lobortis vel lectus quis, suscipit ultricies ex. Fusce sollicitudin feugiat dolor ac malesuada. Sed eleifend euismod purus dictum rutrum.
                Phasellus in ante suscipit, tempor urna at, consectetur nisl. Aenean congue vel ante gravida iaculis. Cras egestas condimentum metus, non dapibus risus.</p>

                <p>Mesa 4: Praesent elit tellus, luctus eget urna eu, semper mattis dolor. Suspendisse eget urna et lacus lacinia iaculis. Fusce nec dapibus dolor, vitae tincidunt nunc.
                Donec rutrum justo vitae imperdiet vehicula. Duis mi lectus, iaculis ac finibus sit amet, finibus eget dolor. Nulla eget mauris malesuada, faucibus lacus et, vulputate enim.
                Nam eget est in mi dignissim bibendum et porta tortor. In nec tempus enim, a finibus eros. Curabitur venenatis pulvinar dictum. Praesent egestas rhoncus turpis sed semper.</p>
            </div>
            <div class="sidebar col-sm-3">
                <div class="title">
                <h2>Suas notificações:</h2>
                <ul>
                    <li>Horário de Mesa 1 foi alterado</li>
                    <li>Jogador _D4rk_S0rc3r3r_ saiu da mesa 2</li>
                    <li>O jogo da mesa 3 foi cancelado</li>
                    <li>O mestre Krysvera te convidou para a mesa 4</li>
                </ul>
                </div>
            </div>
        </div>
    </body>
    <?php include "footer.inc"; ?>
</html>