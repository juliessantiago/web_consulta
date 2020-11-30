<?php

abstract class Conexao{
    private static $instPDO; 

    public static  function criaConexao(){
        if(self::$instPDO==null){
                self::$instPDO = new PDO('mysql: host=localhost; dbname=web_consulta;'
                , 'root', ''); //Setado sem password para facilitar processo

            return self::$instPDO; 
        }
        
    }
}

