<?php

require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/home',
    function () {

        require_once("view/trainee.php");
    }
);
$app->get(
    '/catalogobackup',
    function () {

        require_once("view/catalogobackup.php");
    }
);
$app->get(
    '/catalog',
    function () {

        require_once("view/catalogo.php");
    }
);
$app->get(
    '/shoppingcart',
    function(){

        require_once("view/cart.php");
    }
);
$app->get(
    '/carrinho',
    function(){

        require_once("view/cart.php");
    }
);

$app->get(
    '/login',
    function(){

        require_once("view/login.php");
    }
);
    
$app->get(
    '/register',
    function(){

        require_once("view/register.php");
    }
);
  
$app->get(
    '/succeed',
    function(){

        require_once("/succeed.html");
    }
);
    
$app->get('/produtos', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos where preco > 0 order by preco desc limit 3;");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $produto['preco'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);

});    

$app->get('/produto_:id_prod', function($id_prod){

    $sql = new Sql();

    $produtos = $sql->select("SELECT * FROM tb_produtos WHERE id_prod = $id_prod");
    
    $produto = $produtos[0];
    //ARRUMAR O ERRO QUE TA DANDO AO TENTARMOS IR A PAGINA DO PRODUTO APÓS CLICARMOS NO BOTÃO DE COMPRA NO CATÁLOGO

    $preco = $produto['preco'];
    $produto['preco'] = number_format($preco, 2, ",", ".");
    
    require_once("view/catalogo-produto.php");
});

$app->get('/carrinho-dados', function(){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $carrinho['produtos'] = $sql->select("CALL sp_carrinhosprodutos_list(".$carrinho['id_car'].")");

    $carrinho['total_car'] = number_format((float)$carrinho['total_car'], 2, ',', '.');
    $carrinho['subtotal_car'] = number_format((float)$carrinho['subtotal_car'], 2, ',', '.');
    $carrinho['frete_car'] = number_format((float)$carrinho['frete_car'], 2, ',', '.');


    echo json_encode($carrinho);

});

$app->get('/carrinhoAdd-:id_prod', function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].", ".$id_prod.")");

    header("location: shoppingcart");
    exit;

});

$app->delete("/carrinhoRemoveAll-:id_prod", function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutostodos_rem(".$carrinho['id_car'].", ".$id_prod.")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->run();

//OLHAR AQUELE ERRO GIGANTE AO ABRIR A PAGE DO SHOPPING CART Q APARECE NO CONSOLE
//PASSAR A PAGE DE LOGIN E REGISTRO PRA PHP
//MESCLAR OS CSS PARA FICAR TD NUM SÓ