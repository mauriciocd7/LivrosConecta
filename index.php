<?php
session_start();
require 'config.php';

 
spl_autoload_register(function($class){ //autoload serve para automatizar o carregamento das classes.

    //verifica a qual pasta o arquivo $class pertence e dá um require nele, ou seja é só chamar o arquivo que o autoload se encarrega de achá-lo
    if(file_exists('controllers/'.$class.'.php')){
        require 'controllers/'.$class.'.php';
    } 
    else if(file_exists('models/'.$class.'.php')){
        require 'models/'.$class.'.php';
    } 
    else if (file_exists('core/'.$class.'.php')){
        require 'core/'.$class.'.php';
    }
    
});

$core = new Core();
$core->run(); //executa o run do core

?>