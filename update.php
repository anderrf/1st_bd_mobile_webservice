<?php

    try {
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_mobile");
                                    //Servidor  usu�rio     senha   banco
        
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $query = "UPDATE tb_pessoa SET  nm_pessoa = '$nome', ds_email = '$email' WHERE cd_pessoa = $codigo";
        
        mysqli_query($conexao, $query);
        echo "Registro alterado";
        
    } catch (Exception $e) {
        echo "Erro ao deletar: ".$e;
    }