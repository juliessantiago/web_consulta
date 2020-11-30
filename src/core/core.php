<?php
//Criação da classe Core e seus métodos 
class Core {

    public function carregaURL($url){
        
            if(!isset($url['pagina '])){
                echo ('Dashboard'); 
            }
            else {

                $controller = ucfirst( $url ['pagina'].'Controller' );//ucfirst = uppercase 
                 $metodo = 'exibePagina'; 

                if(!class_exists($controller)){ //Verificando a existência da classe solicitada
                    $controller = 'ErroController'; 
                }
                
                call_user_func_array(array(new $controller, $metodo), array()); 
            }
    }
}
?> 