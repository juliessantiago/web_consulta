<?php 

    require_once('Core/Core.php'); //verificação da URL 
    require_once('Controller/CadastromedController.php'); 


    $view = file_get_contents('view/template.html'); 

    echo($view); 

    $Core = new Core;
    

    $Core->carregaURL($_GET); 

    
    






