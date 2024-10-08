<?php
    
    //REQUISIÇÃO
    $so_interface = $_SERVER['HTTP_USER_AGENT'];
    
    $so = 'Windows ';
    
    //BUSCANDO O ELEMENTO ($so_interface PEGA O TIPO E $so PROCURA O WINDOWNS)
    if(strpos($so_interface, $so) != false){ 
        // echo 'Estou no Windows';
        header('Location: http://localhost/Interceptador/desk_web/desk.php ');

    } else {
        // echo 'Não estou no Windows';
        header('Location: http://localhost/Interceptador/mobile_web/mobile.php ');

    }


    // echo $so_interface;





?>