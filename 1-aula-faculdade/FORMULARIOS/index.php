<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- CRIACAO DE UM FORMULARIO EM PHP -->

    <form action="welcome.php" method="POST"> <!-- MANDANDO OS DADOS PARA OUTRA PAGINA USANDO O METODO POST -->

        Nome: <input type="text" name="nome"><br>

        Email: <input type="email" name="email"><br>

        Senha: <input type="password" name="senha">

        <input type="submit" value="Enviar">

    </form>

</body>

</html>