<?php
require 'environment.php';

$config = array(); //array para a configuração do DB

if (ENVIRONMENT == 'development'){  //para pegar os dados do banco de dados correto produção ou desenvolvimento do environment.php
    define("BASE_URL", "http://localhost/projects/livrosConecta/"); //diferenciação de URL
    $config['dbname'] = 'livrosConecta';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = ''; 
}else{
    define("BASE_URL", "http://livrosconecta.life/");
    $config['dbname'] = 'epiz_24841737_livrosconecta'; //se for produção de servidor de hospedagem muda no environment.php...
    $config['host'] =   'sql304.epizy.com';
    $config['dbuser'] = 'epiz_24841737';
    $config['dbpass'] = 'l0Uusv714ox5FP'; 
}

global $db;  //atributo acessível em várias partes do sistema 
    try{
        $db = new PDO("mysql:dbname=".$config['dbname']."; host=".$config['host'], $config['dbuser'], $config['dbpass']);   
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage(); 
        exit;
    }


?>