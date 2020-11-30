<?php
//Criação da classe Core e seus métodos 

class Core {
   
    public function carregaURL($url){

         $controller = ucfirst( $url ['pagina'].'Controller' );//ucfirst = uppercase 
         $metodo = 'exibePagina'; 

         
         if(class_exists($controller)){ //Verificando a existência da classe solicitada
            echo ($controller); 
         } else {
             echo ('Página não encontrada'); 
         }
         
         call_user_func_array(array(new $controller, $metodo), array()); 

    }
}
?> 