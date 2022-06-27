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
                <a href="#!" class="brand-logo"><img src="infointerface.png" class="responsive-img" width="70"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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
    </div>
    <div class="container-fluid">
        <div style="min-height: 55vh">
            <div class="row left valign-wrapper">
                <?php

                for ($i = 1; $i <= 12; $i++) {
                    if ($i % 2 == 0) {
                        echo '
        <div class="col s3 left">
            <img src="icones/' . $i . '.png" class="left circle white" width="150" height="150">
        </div>
        </div>
        <div class="row left valign-wrapper">
            ';
                    } else {
                        echo '
            <div class="col s3 left">
                <img src="icones/' . $i . '.png" class="left circle white " width="150" height="150">
            </div>
            ';
                    }
                } ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <img src="frufru.png" class="center responsive-img " width="170%">
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        M.AutoInit();
    </script>
</body>

</html>