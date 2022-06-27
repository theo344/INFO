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
    </div>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="white-text">Animais Cadastrados</h3>
                <div class="divider"></div>
            </div>
        </div>

        <form class="teal">
            <div class="row">
                <div class="col s12 m4">
                    <h5 class="white-text">Bidu</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <img src="viralata.png" class="responsive-img" width="40%">
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Especie do Animal: Cachorro</h6>
                </div>

            </div>

            <div class="row">
                <div class="col s12 m4">
                    <h6 class="white-text">Raça do Animal: Vira-Lata </h6>
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Idade do animal: 2 anos</h6>
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Peso do Animal: 25 kg</h6>
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Altura do Animal: 40 cm</h6>
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Sexo do Animal: Macho</h6>
                </div>

                <div class="col s12 m4">
                    <h6 class="white-text">Escreva a História do Animal: Bidu como é conhecido
                        foi encontrado andando pelas ruas do centro da cidade, foi resgatado,
                        cuidado e colocado para adoção.
                    </h6>
                </div>
            </div>

        </form>
    </div>

    <div>
        <p class="center"><a class="waves-effect waves-light btn" href="index2.php">voltar</a></p>
    </div>

</body>