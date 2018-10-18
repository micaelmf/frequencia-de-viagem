<?php
$pastaRaiz = "viagem";
$nomeSite = "Frquencia de Viagem";
$dominio = "http://localhost/";

//define('URL-BASE', $_SERVER['DOCUMENT_ROOT'].'/{$pastaRaiz}/app');
define('DIR_APP', '/{$pastaRaiz}/app'); //para usar dentro das tags html
define('DIR_PUBLIC', '/{$pastaRaiz}/public'); //para usar dentro das tags html
define('IMPORTS', 'app'); //para usar nos includes e requires
define('TEMPLATE', 'app/templates/assets');

/*
 *	Diretórios 
 */
define('IMAGES', '/{$pastaRaiz}/public/images');
define('VIEWS_ADM', 'app/views/{$acessoAdm}');
define('VIEWS_ESTUDANTE', 'app/views/estudante');
define('MODELS', 'app/models');
define('DAO', 'app/models/dao');
define('HELPER', 'app/views/view-helpers');
define('CONTROLLER', 'app/controllers');
define('FACADE', 'app/facades');
//define('LINK_ADM', '/{$pastaRaiz}/{$acessoAdm}');
define('URL_BASE', '{$dominio}/{$pastaRaiz}');
define('PAG_401', VIEWS . '401.php');
define('PAG_403', VIEWS . '403.php');
define('PAG_404', VIEWS . '404.php');
define('PAG_500', VIEWS . '500.php');
define('PERM', 'app/views/sem-permissao.php');

/*
 *	Constantes 	
 */
define('SITE', '{$nomeSite}');
define('V_BACK', 'Pre-Alpha');
define('V_FRONT', 'Pre-Alpha');
define('TEMPO_LIMITE_SESSAO', 60*10); //60s * 10 = 600s