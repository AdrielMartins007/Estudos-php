<!-- EXERCICIO DE CRIAÇÃO DE UM BANCO DE DADOS COM TABELA VIA PHP -->

<?php 

$servidor = "Localhost";
$usuario = "root";
$senha = "password";
$banco = "meu_banco";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("CONEXAO FALHOU" . $conexao->connect_error);
} else {
    echo "CONECTADO COM SUCESSO!";
}

$comandoSql = "CREATE TABLE Usuarios (
id INT(6) PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conexao->query($comandoSql) === true){
    echo "TABELA CRIADA COM SUCESSO!";
} else {
    echo "ERRO NA CRIAÇÃO DA TABELA" . $conexao->error;
}

?>
