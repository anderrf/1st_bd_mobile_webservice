<?php
    try{
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_mobile");
                                    //Servidor  usu�rio     senha   banco
        
        $id = $_GET['id'];
        
        $query = "SELECT * FROM tb_pessoa WHERE cd_pessoa = $id";
        
        $resultado = mysqli_query($conexao, $query);
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            
            $registro = array(
                'pessoas' => array(
                    'codigo' => $linha['cd_pessoa'],
                    'nome' => $linha['nm_pessoa'],
                    'email' => $linha['ds_email'],
                )
                
            );
            $i++;
        }

        echo json_encode($registro);
        
    }catch (Exception $e){
        
        echo "Falha: " . $e;
        
    }