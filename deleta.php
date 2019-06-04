<?php
    try {
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_mobile");
                                    //Servidor  usu�rio     senha   banco
        
        $id = $_GET['id'];
        
        $query = "DELETE FROM tb_pessoa WHERE cd_pessoa = $id";
        
        mysqli_query($conexao, $query);
        echo "Registro removido";
        
    } catch (Exception $e) {
        echo "Erro ao deletar: ".$e;
    }