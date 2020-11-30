<?php
//Controller da página Cadastro de médico 
    class CadastromedController {
        public function exibePagina(){
            $view = file_get_contents('view/cadastroMedico.html'); 
            echo $view; 

            $conexao = Conexao::criaConexao(); 
            //var_dump($conexao); 
        }

        

        
    }