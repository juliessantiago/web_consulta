<?php 
//Controller da página de exibiçaõ de todos os médicos 
class ListamedController {
    public function exibePagina(){
       
        try{
            $lista = Medico::listaTodos();
            var_dump($lista);  

        }catch(Exception $error){
            echo $error->getMessage(); 
        }

    }
}