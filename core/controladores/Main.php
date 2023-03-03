<?php

namespace core\controladores;

use core\controladores\Functions;

class Main
{

    public function index()
    {
        $clientes = ['joão', 'ana', 'carlos'];

        $dados = [
            'titulo' => 'Esse é o título'
        ];

        Functions::Layout([
            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',
        ], $dados);
    }

    public function loja()
    {
        echo 'Voce esta na loja';
    }
}
