<?php 

    include('Core/Core.php'); //verificação da URL 
    include('Controller/CadastromedController.php'); 
    include('Controller/ErroController.php'); 


    $view = file_get_contents('view/template.html'); 

    echo($view); 

    $Core = new Core;
    

    $Core->carregaURL($_GET); 

    
    






