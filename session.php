<?php

    session_start();

    if (empty($_SESSION['itens'])) {
        $_SESSION['itens']=[];
    }

    function listarItem(){
        $objeto = $_SESSION['itens'];
        return $objeto;
    }

    function criarItem($iten){
        $id = rand(1, 10000);

        $_SESSION['itens'][]= [
            'id' => $id ,
            'itens' => $iten  
        ];
    }

    function editarItem($id, $iten){
        foreach ( $_SESSION['itens'] as $chave => $item) {
            if($item['id'] == $id){
                $_SESSION['itens'][$chave]['itens'] = $iten;
            }
        }
    }

    
    function excluirItem($id){
        foreach ( $_SESSION['itens'] as $chave => $objeto) {
            if($objeto['id'] == $id){
                unset($_SESSION['itens'][$chave]);
            }
        }
    }
?>