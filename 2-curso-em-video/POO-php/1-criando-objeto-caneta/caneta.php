<?php 

class Caneta{
    var $modelo; /* CRIANDO OS ATRIBUTOS DA CLASSSE */
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function tampar(){ /* CRIANDO A FUNCAO */
        $this->tampada === false; /* INCLUINDO UM VALOR NA ATRIBUIÇÃO TAMPADA */
        echo "<h3>caneta da cor: $this->cor:</h3>"; /* PEDINDO PRA MOSTRAR A COR */
        echo "<h3>ESTOU RABISCANDO...</h3>"; /* PEDINDO PRA EXIBIR MENSAGEM SE CASO NAO ESTIVER TAMPADA */
    }

    function destampar(){
        $this->tampada === true;
        echo "<h3>caneta da cor: $this->cor:</h3>";
        echo "<h3>NAO POSSO RABISCAR...</h3>";
    }
}

?>
