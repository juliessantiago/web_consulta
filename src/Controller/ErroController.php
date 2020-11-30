<?php 

//Controller da página Erro, caso a URL solicitada não exista 

class ErroController {
    public function exibePagina(){
        $view = file_get_contents('view/erro404.html');
        echo ($view);  
    }

}