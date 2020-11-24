<?php
//Arquivo que faz o carregamento automático dos arquivos 
spl_autoload_register(function($arquivo){
    if(file_exists('controller/'.$arquivo.'.php')){
        require 'controller/'.$arquivo.'.php'; 
    }elseif(file_exists('model/'.$arquivo.'.php')) {
        require 'model/'.$arquivo.'.php'; 
    }elseif(file_exists('core/'.$arquivo.'.php')){
        require('core/'.$arquivo.'.php'); 
    }
}); 

?> 
