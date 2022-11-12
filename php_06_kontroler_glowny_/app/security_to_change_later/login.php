<?php 
require_once dirname(__FILE__).'/../../config.php';

function getLogin(&$loginData){
    $loginData['login'] = $_REQUEST['login']??null;
    $loginData['pass'] = $_REQUEST['pass']??null;
}

function validateLogin(&$loginData,&$messages){
    if(!(isset($loginData['login']) && isset($loginData['pass'])))
        return false;

    if ( $loginData['login'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ( $loginData['pass'] == "") {
		$messages [] = 'Nie podano hasła';
	}

    if(!empty($messages)) return false;

    if($loginData['login'] == 'admin' && $loginData['pass'] == "admin"){
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if($loginData['login'] == 'user' && $loginData['pass'] == "user"){
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }
    $messages[] = 'Błędny login lub hasło';
    return false;
}

$loginData = array();
$messages = array();

getLogin($loginData);

if(!validateLogin($loginData,$messages)){
    include _ROOT_PATH.'/app/security/login_view.php';
}
else{
    header("Location:"._APP_URL);
}


?>