<?php 
class Core { //base do sistema, mas não é parte da estrutura mvc, apenas usado para dar a partida na estrutura
 
	public function run() {

		$url = '/';
		if(isset($_GET['url'])) {//se existe url concatena barra com endereço GET
			$url .= $_GET['url'];
		}

		$params = array(); //caso não tenha parâmetro ele já se starta vazio

		if(!empty($url) && $url != '/') { 
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url); //remove o primeiro registro do array que fica em branco, mas retoma a sequencia a partir do 0.

			if(isset($url[0]) && !empty($url[0])) {//verificação de array se enviou url e é diferente de vazio
				$currentAction = $url[0];
				array_shift($url); //se cair aqui, sobrará somente o parâmetro
			} else {
				$currentAction = 'index'; //se não enviou nada ele é index
			}

			if(count($url) > 0) { //atribuir parâmetro se for enviado
				$params = $url;
			}

		} else {//caso contrário seta a action padrão homeController e a action index
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
			$currentController = 'notfoundController';
			$currentAction = 'index';
		}

		$c = new $currentController(); //instancia o que está armazenado na variável

		call_user_func_array(array($c, $currentAction), $params); //função vai pegar a classe e executar a action
		
	}

}


?>