<?php
/**
 * @author Micael Ferreira
 * @copyright Comunidade Vale Livre 2019
 * @license MIT
 * @version Pre-Alpha
 */
session_start();
date_default_timezone_set('America/Fortaleza');

$pastaRaiz = "/";
$acessoAdm = "admin";
$nomeSite = "Comunidade Vale Livre";
$dominio = "http://valelivre.org/";

define("DIR_BASE", $_SERVER["DOCUMENT_ROOT"]."/");
//define("IMPORTS", "app"); //para usar nos includes e requires
define("URL_BASE", "http://{$_SERVER["HTTP_HOST"]}/");
//define("DIR_BASE", "/"); //para usar dentro das tags html

/**
 * Diretórios
 */
define("IMAGES", "/public/img/");
define("PUBLIC", DIR_BASE . "public/");
define("CSS", "/public/css/");
define("LESS", "/public/less/");
define("JS", "/public/js/");
define("VIEWS_ADM", ROOT . "app/views/{$acessoAdm}/");
define("VIEWS", "app/views/");
define("MODELS", ROOT . "app/models/");
define("DAO", ROOT . "app/models/dao/");
define("CONTROLLER", ROOT . "app/controllers/");
define("HELPER", ROOT . "app/view-helper/");
define("INCLUDES", ROOT . "app/includes/");
define("CONFIG", ROOT . "config/");
define("HOME_ADM", "dashboard");
define("SAIR", "sair");
define("PAG_401", VIEWS . "401.php");
define("PAG_403", VIEWS . "403.php");
define("PAG_404", VIEWS . "404.php");
define("PAG_500", VIEWS . "500.php");
define("PAG_PERM", VIEWS . "sem-permissao.php");

/**
 * Acesso ao banco de dados
 */
define("BD_HOST", "db");
define("BD_NAME", "valelivre");
define("BD_USER", "micael");
define("BD_PW", "123123");
/*
define("BD_HOST", "localhost");
define("BD_NAME", "grupo589_sistema");
define("BD_USER", "grupo589_micael");
define("BD_PW", "micael098");
*/

/**
 * Constantes
 */

define("SITE", "{$nomeSite}");
define("V_BACK", "Pre-Alpha");
define("V_FRONT", "Pre-Alpha");
define("TEMPO_LIMITE_SESSAO", 60*10); //60s * 10 = 600s
