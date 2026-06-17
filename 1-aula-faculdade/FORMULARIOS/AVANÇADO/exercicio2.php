<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <style>
        body {
            display: flex;f
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        textarea {
            margin-top: 10px;
            padding: 25px;
            text-align: center;
        }

        .erro {
            color: red;
            font-size: 14px;
        }

        .sexo-area {
            margin-top: 15px;
        }

        .botao {
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php

    $nome = $email = $site = $comentario = $sexo = "";
    $nomeErro = $emailErro = $siteErro = $comentarioErro = $sexoErro = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (empty($_POST['nome'])) {
            $nomeErro = "* Preencha o nome";
        } else {
            $nome = htmlspecialchars(trim($_POST['nome']));
        }

        if (empty($_POST['email'])) {
            $emailErro = "* Preencha o email";
        } else {
            $email = htmlspecialchars(trim($_POST['email']));
        }

        if (empty($_POST['site'])) {
            $siteErro = "* Preencha o site";
        } else {
            $site = htmlspecialchars(trim($_POST['site']));
        }

        if (empty($_POST['comentario'])) {
            $comentarioErro = "* Preencha o comentário";
        } else {
            $comentario = htmlspecialchars(trim($_POST['comentario']));
        }

        if (empty($_POST['sexo'])) {
            $sexoErro = "* Escolha um sexo";
        } else {
            $sexo = $_POST['sexo'];
        }
    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label>Nome:</label>
        <input type="text" placeholder="Insira o seu nome" name="nome"
            value="<?php echo $nome; ?>">

        <span class="erro">
            <?php echo $nomeErro; ?>
        </span>

        <label>Email:</label>
        <input type="email" placeholder="Insira o seu email" name="email"
            value="<?php echo $email; ?>">

        <span class="erro">
            <?php echo $emailErro; ?>
        </span>

        <label>Site:</label>
        <input type="url" placeholder="Insira o seu site" name="site"
            value="<?php echo $site; ?>">

        <span class="erro">
            <?php echo $siteErro; ?>
        </span>

        <label>Comentário:</label>

        <textarea name="comentario" rows="5" cols="5"><?php echo $comentario; ?></textarea>

        <span class="erro">
            <?php echo $comentarioErro; ?>
        </span>

        <div class="sexo-area">

            <label>Escolha um sexo:</label>

            <br><br>

            <input type="radio" name="sexo" value="M"
                <?php if ($sexo == "M") echo "checked"; ?>>
            Masculino

            <input type="radio" name="sexo" value="F"
                <?php if ($sexo == "F") echo "checked"; ?>>
            Feminino

            <br>

            <span class="erro">
                <?php echo $sexoErro; ?>
            </span>

        </div>

        <input class="botao" type="submit" value="Enviar">

    </form>

</body>

</html>