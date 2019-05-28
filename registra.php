<?php
    try{
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_mobile");
                                    //Servidor  usu�rio     senha   banco
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $query = "INSERT INTO tb_pessoa VALUES (NULL ,  '$nome',  '$email');";
        mysqli_query($conexao, $query);
        
        echo "Cadastro realizado com sucesso";
        
    }catch (Exception $e){
        
        echo "Falha: " . $e;
        
    }