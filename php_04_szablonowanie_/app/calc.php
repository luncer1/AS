<?php

require_once dirname(__FILE__).'/../config.php';

$header_text = false;

require_once _ROOT_PATH.'/libs/smarty/Smarty.class.php';
function getParameters(&$kwotaKredytu, &$oprocentowanie, &$okresSplaty){
	$kwotaKredytu = str_replace(",",".",$_REQUEST ['kwotaKredytu']??"");
	$oprocentowanie = str_replace(",",".",$_REQUEST ['oprocentowanie']??"");
	$okresSplaty = $_REQUEST ['okresSplaty']??"";
}

function validator(&$kwotaKredytu, &$oprocentowanie, &$okresSplaty, &$messages){
	if ( ! (isset($kwotaKredytu) && isset($oprocentowanie) && isset($okresSplaty))) {
		$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
	}

	if ( $kwotaKredytu == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $okresSplaty == "") {
		$messages [] = 'Nie podano długości kredytu';
	}

	if(!empty($messages)) return FALSE;

		
	if ($kwotaKredytu <= 0) {
		$messages [] = 'Kwota kredytu musi być liczbą dodatnią!';
	}
	else if(!is_numeric($kwotaKredytu)){
		$messages [] = 'Kwota kredytu musi być liczbą!';
	}
	
	if ($okresSplaty <= 0) {
		$messages [] = 'Okres spłaty musi być liczbą dodatnią!';
	}
	else if(!is_numeric($okresSplaty) || (strpos($okresSplaty,".") != false)){
		$messages [] = 'Okres spłaty musi być liczbą całkowitą!';
	}	

	if ($oprocentowanie <= 0) {
		$messages [] = 'Oprocentowanie musi być liczbą dodatnią!';
	}
	else if(!is_numeric($oprocentowanie)){
		$messages [] = 'Oprocentowanie musi być liczbą!';
	}	


	if(empty($messages)) return TRUE;
	else return FALSE;
}

function calculate(&$kwotaKredytu, &$oprocentowanie, &$okresSplaty, &$messages, &$result){
	$result = ($kwotaKredytu*($oprocentowanie/100))/(12*(1-pow(12/(12+($oprocentowanie/100)),$okresSplaty*12)));
	$result = round($result,2);
	$header_text = true;
}

$kwotaKredytu = null;
$oprocentowanie = null;
$okresSplaty = null;
$result = null;
$messages = []; 

getParameters($kwotaKredytu, $oprocentowanie,$okresSplaty);

if (validator($kwotaKredytu, $oprocentowanie, $okresSplaty, $messages)){
	calculate($kwotaKredytu, $oprocentowanie, $okresSplaty, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator Kredytowy');

$smarty->assign('kwotaKredytu',$kwotaKredytu);
$smarty->assign('oprocentowanie',$oprocentowanie);
$smarty->assign('okresSplaty',$okresSplaty);

$smarty->assign('headerText',"Kalkulator Kredytowy");

$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');
