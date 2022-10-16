<?php

require_once dirname(__FILE__).'/../config.php';
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


include 'calc_view.php';