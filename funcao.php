<?php
    function nome() {
        echo "<p>" . "Chamando a função 'nome()': " . "</p>";
        return "Gabriel";
    }

    $meu_nome = nome();

    if(isset($meu_nome)) {
        echo "<p>" . "Bem-vindo, $meu_nome" . "</p>";
    } else
        echo "<p>" ."Variável sem valor!" . "</p>";

?>