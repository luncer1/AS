<?php

require_once dirname(__FILE__).'/core/Config.class.php';
$config = new core\Config();
include dirname(__FILE__).'/config.php';

function &getConf(){ global $config; return $config; }
require_once getConf()->root_path.'/core/Messages.class.php';

$messages = new core\Messages();
function &getMessages(){ global $messages; return $messages; }

$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once getConf()->root_path.'/libs/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		$smarty->assign('config',getConf());
		$smarty->assign('messages',getMessages());
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php';
$cLoader = new core\ClassLoader();
function &getLoader(){
	global $cLoader;
	return $cLoader;
}

require_once 'core/Router.class.php';
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}


require_once 'core/functions.php';

session_start();
$config->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array();

$router->setAction( getFromRequest('action') );