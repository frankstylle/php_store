<?php

namespace core\controladores;

class Functions{



    public static function Layout($estruturas, $dados = null) {


        // verifica se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválidas");
        }

        // variaveis
        if(!empty($dados) && is_array($dados)) {
            extract($dados);
        }

        // apresentar as views da aplicação
        foreach($estruturas as $estrutura) {
            include("../core/views/$estrutura.php");
        }

    }

}