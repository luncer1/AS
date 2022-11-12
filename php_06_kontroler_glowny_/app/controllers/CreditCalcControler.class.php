<?php namespace app\controllers;

use app\transfer\CreditCalcResult;
use app\forms\CreditCalcForm;


class CreditCalcControler{

    private $form;
    private $result;

    public function __construct(){
        $this->form = new CreditCalcForm();
        $this->result = new CreditCalcResult();
    }

    public function getParams(){
        $this->form->kwotaKredytu = str_replace(",",".",$_REQUEST ['kwotaKredytu']??null);
        $this->form->okresSplaty = $_REQUEST ['okresSplaty']??null;
        $this->form->oprocentowanie = str_replace(",",".",$_REQUEST ['oprocentowanie']??null);

    }
    private function calculate(){
        $this->result->result = ($this->form->kwotaKredytu*($this->form->oprocentowanie/100))/(12*(1-pow(12/(12+($this->form->oprocentowanie/100)),$this->form->okresSplaty*12)));
        $this->result->result = round($this->result->result,2);
    }

    public function validate(){
        if ( ! (isset($this->form->kwotaKredytu) && isset($this->form->oprocentowanie) && isset($this->form->okresSplaty))) {
            return false;
        }
    
        if ( $this->form->kwotaKredytu == "") {
            getMessages()->addErr('Nie podano kwoty kredytu');
        }
        if ( $this->form->oprocentowanie == "") {
            getMessages()->addErr('Nie podano oprocentowania');
        }
        if ( $this->form->okresSplaty == "") {
            getMessages()->addErr('Nie podano okresu spłaty');
        }
    
        if(getMessages()->isError()) return FALSE;
    
            
        if ($this->form->kwotaKredytu <= 0) {
            getMessages()->addErr('Kwota kredytu musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->kwotaKredytu)){
            getMessages()->addErr('Kwota kredytu musi być liczbą!');
        }
        
        if ($this->form->okresSplaty <= 0) {
            getMessages()->addErr('Okres spłaty musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->okresSplaty) || (strpos($this->form->okresSplaty,".") != false)){
            getMessages()->addErr('Okres spłaty musi być liczbą całkowitą!');
        }	
    
        if ($this->form->oprocentowanie <= 0) {
            getMessages()->addErr('Oprocentowanie musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->oprocentowanie)){
            getMessages()->addErr('Oprocentowanie musi być liczbą!');
        }	
    
    
        if(!getMessages()->isError()) return TRUE;
        else return FALSE;
    }

    public function process(){
        $this->getParams();

        if($this->validate()){
            getMessages()->addInfo('Parametry poprawne.');
            $this->calculate();
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView(){

        getSmarty()->assign('page_title','Kalkulator Kredytowy');

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);

        getSmarty()->assign('headerText',"Kalkulator Kredytowy");


        getSmarty()->display('calcCredit.tpl');
    }

}