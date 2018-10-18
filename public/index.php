<?php 

require 'app/controllers/IndexController.php';

$controllerName = mb_convert_case(strip_tags(trim(filter_input(INPUT_GET, 'controle', FILTER_DEFAULT))) , MB_CASE_TITLE);
$controllerName = (empty($controllerName)) ? 'IndexController' : $controllerName .= 'Controller';
$param = mb_convert_case(strip_tags(trim(filter_input(INPUT_GET, 'param', FILTER_DEFAULT))) , MB_CASE_TITLE);
$actionName = strip_tags(trim(filter_input(INPUT_GET, 'acao', FILTER_DEFAULT)));

if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
	$controller = new $controllerName();
	$controller->$actionName();
}else if(empty($controllerName)){
	echo 'Página não encontrada';
}else{
	$controller = new IndexController();
	$controller->_404();
}

?>