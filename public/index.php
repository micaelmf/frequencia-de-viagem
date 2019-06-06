<?php
//define('PUBLIC', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'config/core.php');
require(ROOT . 'app/FrontController.php');
require(ROOT . 'app/request.php');
require(ROOT . 'app/Dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>