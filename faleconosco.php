<?php
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue ">
                <a href="index2.php" class="brand-logo"><img src="infointerface.png" class="responsive-img" width="70"></a>
                <a href="index2.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="cadongs.php">Cadastro de Ongs</a></li>
                    <li><a href="ongscadastradas.php">Ongs Cadastradas</a></li>
                    <li><a href="jatenhocadastro.php">Já Tenho Cadastro</a></li>
                    <li><a href="faleconosco.php">Fale Conosco</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="cadongs.php">Cadastro de Ongs</a></li>
            <li><a href="ongscadastradas.php">Ongs Cadastradas</a></li>
            <li><a href="jatenhocadastro.php">Já Tenho Cadastro</a></li>
            <li><a href="faleconosco.php">Fale Conosco</a></li>

        </ul>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3 class="white-text">Entre em Contato</h3>
                    <div class="divider"></div>
                </div>
            </div>

            <form class="teal" method="post" action="cadastro.php">
                <div class="row">
                    <div class="col s12 m4">
                        <h5 class="white-text"></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <label for="nomecompleto" class="white-text">Nome Completo:</label>
                        <input type="text" name="nomecompleto" id="nomecompleto" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="e-mail" class="white-text">E - mail:</label>
                        <input type="text" name="email" id="email" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="telefone" class="white-text">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" style="border-bottom: 1px solid #ffffff" />
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 ">
                        <label for="enviesuamensagem" class="white-text">Digite sua Mensagem: </label>
                        <textarea id="fundobranco form-control" rows="100" style="background-color:white;"></textarea>
                    </div>
                </div>
        </div>

        </form>
    </div>

    <div>
        <p class="center"><a class="waves-effect waves-light btn" href="index2.php">Salvar</a></p>
    </div>

    <div>
        <p class="center"><a class="waves-effect waves-light btn" href="index2.php">voltar</a></p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        M.AutoInit();
    </script>
</body>

</html>