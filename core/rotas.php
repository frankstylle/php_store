<?php

$rotas = [
    "inicio" => "main@index",
    "loja" => "main@loja",
    "carrinho"  => "loja@carrinho"
];

$acao = 'inicio';
 
if(isset($_GET['a'])) {

    if(!key_exists($_GET['a'], $rotas)) {
        $acao = 'inicio';
    } else {
        $acao = $_GET['a'];
    }

}

$separador = explode('@',$rotas[$acao]);
$controlador = "core\\controladores\\".ucfirst($separador[0]);
$metodo = $separador[1];

$ctr = new $controlador();
$ctr->$metodo();