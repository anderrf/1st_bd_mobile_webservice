<?php
    try{
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_mobile");
                                    //Servidor  usu�rio     senha   banco
        
        $query = "SELECT * FROM tb_pessoa ORDER BY cd_pessoa ASC";
        
        $resultado = mysqli_query($conexao, $query);
        
        $registro = array(
            'pessoas'=>array()
        );
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['pessoas'][$i] = array(
                'codigo' => $linha['cd_pessoa'],
                'nome' => $linha['nm_pessoa'],
                'email' => $linha['ds_email'],
            );
            $i++;
        }

        echo json_encode($registro);
        
    }catch (Exception $e){
        
        echo "Falha: " . $e;
        
    }