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
                    <h3 class="white-text">Cadastro de Animais</h3>
                    <div class="divider"></div>
                </div>
            </div>
            <form class="teal">
                <div class="row">
                    <div class="col s12 m4">
                        <h5 class="white-text">Dados do Animal</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <label for="nomedoanimal" class="white-text">Nome do Animal</label>
                    </div>

                    <div class="col s12 m4">
                        <label for="imagemdoanimal" class="white-text">Imagem do Animal</label>
                        <input type="file" name="imagemdoanimal" id="imagemdoanimal" class="white-text" />
                    </div>

                    <div class="col s12 m4">
                        <label for="especiedoanimal" class="white-text">Especie do Animal</label>
                        <input type="text" name="especiedoanimal" id="especiedoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="racadoanimal" class="white-text">Raça do Animal</label>
                        <input type="text" name="racadoanimal" id="racadoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="idadedoanimal" class="white-text">Idade do Animal</label>
                        <input type="text" name="idadedoanimal" id="idadedoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="pesooanimal" class="white-text">Peso do Animal</label>
                        <input type="text" name="pesodoanimal" id="pesodoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="alturaoanimal" class="white-text">Altura do Animal</label>
                        <input type="text" name="alturadoanimal" id="alturadoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="sexodoanimal" class="white-text">Sexo do Animal</label>
                        <input type="text" name="sexodoanimal" id="sexodoanimal" class="white-text" style="border-bottom: 1px solid #ffffff" />
                    </div>

                    <div class="col s12 m4">
                        <label for="escrevaanimal" class="white-text">Escreva sobre a história do Animal</label>
                        <textarea name="descrOng" id="" cols="30" rows="10" style="background-color:white;"></textarea>
                    </div>
                </div>

        </div>
        </form>
        <div>
            <p class="center"><a class="waves-effect waves-light btn" href="JáTenhoCadastro.php">Enviar</a></p>
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