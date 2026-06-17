<?php 

/* INCLUINDO DADOS DO BANCO DE DADOS QUE VAI RECEBER A CONEXAO */
$nomeServidor = "Localhost";
$nomeUsuario = "root";
$senha = "password";
$banco = "bancoaulalennon"; /* NOME DO BANCO DE DADOS */

/* CRIACAO DA VARIAVEL E OS COMANDOS PARA SE CONECTAR AO BANCO DE DADOS */
$conexao = new mysqli($nomeServidor, $nomeUsuario, $senha, $banco);

/* CONDIÇÃO PARA VERIFICAR A CONEXAO */
if($conexao->connect_error){ /* USANDO UMA FUNCAO PARA VERIFICAR O ERRO */
    die("Conexao falhou" . $conexao->connect_error); /* SE CASO NAO DER CERTO, ELE ENCERRA A CONEXAO */
} else {
    echo "Conectado com sucesso!"; /* MENSAGEM DE SUCESSO SE CASO FOR CONECTADO */
}

/* FUNCAO PARA FECHAR A CONEXAO, IMPEDINDO QUE USUARIOS MALICIOSOS ENVIEM CODIGOS SQL PRO BANCO DE DADOS */
/* $conexao->close(); */ /* FUNCAO PARA ENCERRAR A CONEXAO DEPOIS DE CONECTADO */


/* CRIANDO O BANCO DE DADOS DENTRO DO PHP */

/* $sql = "CREATE DATABASE BancoAulaLennon"; */ /* VARIAVEL COM O COMANDO DE CRIAÇÃO DO BANCO DE DADOS */

/* CRIANDO UMA TABELA DENTRO DO BANCO DE DADOS */
$sql = "CREATE TABLE minhaTabela (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
PrimeiroNome VARCHAR(30) NOT NULL, 
UltimoNome VARCHAR(30) NOT NULL, 
email VARCHAR(50), 
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conexao->query($sql) === true){ /* CONDIÇÃO COM RETORNO SE CASO FOI CONECTADO OU NAO */
    echo "tabela foi criada com sucesso";
} else {
echo "erro na criação da tabela" . $conexao->error;
}

?>