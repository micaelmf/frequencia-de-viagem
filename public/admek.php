<?php 

require 'app/controllers/AdmekController.php';

$controllerName = mb_convert_case(strip_tags(trim(filter_input(INPUT_GET, 'controle', FILTER_DEFAULT))) , MB_CASE_TITLE);
$controllerName = (empty($controllerName)) ? 'AdmekController' : $controllerName .= 'Controller';
$param = mb_convert_case(strip_tags(trim(filter_input(INPUT_GET, 'param', FILTER_DEFAULT))) , MB_CASE_TITLE);
$actionName = strip_tags(trim(filter_input(INPUT_GET, 'acao', FILTER_DEFAULT)));

if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
	$controller = new $controllerName();
	$controller->$actionName();
}else if(empty($controllerName)){
	echo '<script type="text/javascript"> location = "pagina-inicial.php" </script>';
}else{
	$controller = new AdmekController();
	$controller->_404();
}

?>