<?php 
//Model da tabela MÉDICO

class Medico {
    public static function listaTodos(){
        $conexao = Conexao::criaConexao(); 
        $query = "SELECT * FROM MEDICO ORDER BY ID ASC"; 
        $query = $conexao->prepare($query); 

        $query->execute(); 

        $resultado = array(); 
        while ($linha = $query->fetchObject('ListamedController')){
            $resultado[] = $linha; 
        }

        if($resultado==null){
            throw new Exception("Não foram encontrados registros"); 
        }

        return $resultado; 
        
    }

}