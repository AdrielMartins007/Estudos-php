<?php 

$nomeServidor = "Localhost";
$nomeUsuario = "root";
$senha = "password";
$banco = "bancoaulalennon";

$conexao = new mysqli($nomeServidor, $nomeUsuario, $senha, $banco);

if($conexao->connect_error){
    die("Conexao falhou" . $conexao->connect_error);
} else {
    echo "Conectado com sucesso!";
}

/* COMANDO SQL PARA O ENVIO DOS DADOS NA TABELA E COLUNA */
$comandoSQL = "INSERT INTO minhatabela (PrimeiroNome, UltimoNome, email) VALUES ('jose', 'Martins', 'jose123@gmail.com');";
$comandoSQL .= "INSERT INTO minhatabela (PrimeiroNome, UltimoNome, email) VALUES ('maria', 'Martins', 'maria123@gmail.com');";
$comandoSQL .= "INSERT INTO minhatabela (PrimeiroNome, UltimoNome, email) VALUES ('fulano', 'Martins', 'fulano123@gmail.com')";

/* if($conexao->query($comandoSQL) === true){ */ /* COMANDO PARA MANDAR APENAS UMA LINHA POR VEZ */

if($conexao->multi_query($comandoSQL) === true) {/* COMANDO PARA MANDAR MAIS DE UMA LINHA DE COMANDO SQL */
    $ultimoID = $conexao->insert_id; /* CRIACAO DA VARIAVEL COM A FUNCAO DE PEGAR O ULTIMO ID CADASTRADO */
    echo "Dados enviados com sucesso e o ultimo id é: " . $ultimoID; /* MOSTRANDO NA TELA O ULTIMO ID REGISTRADO */
} else {
echo "erro no envio dos dados" . $conexao->error;
}

?>