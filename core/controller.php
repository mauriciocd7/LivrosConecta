<?php //php que auxilia os controllers
class controller{

    public function loadView($viewName, $viewData = array()){  //vai carregar a view, receber os dados, se não houver dados trata como array parâmetro opcional
        extract($viewData); //transforma os indices do array em variável
        require 'views/'.$viewName.'.php'; //require na view
    } 

    public function loadTemplate($viewName, $viewData = array()){ //carrega template conteúdo cabeçalho, rodapé
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }

}

?>