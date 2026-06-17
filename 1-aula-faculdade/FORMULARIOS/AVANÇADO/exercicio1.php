<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form method="POST">
        <select name="cor">
            <option value="amarelo">Amarelo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
            <option value="vermelho">Vermelho</option>
        </select>

        <input type="submit">

    </form>

    <?php

    if(isset($_POST['cor'])){
        echo $_POST["cor"];
    } else {
        echo "Nenhum item foi selecionado";
    }

    ?>

</body>

</html>