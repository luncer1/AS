<?php

require_once $config->root_path.'/libs/smarty/Smarty.class.php';
require_once $config->root_path.'/libs/Messages.class.php';
require_once $config->root_path.'/app/CalcForm.class.php';
require_once $config->root_path.'/app/CalcResult.class.php';

class CalcControler{

    private $messages;
    private $form;
    private $result;

    public function __construct(){
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
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
            $this->messages->addErr('Nie podano kwoty kredytu');
        }
        if ( $this->form->oprocentowanie == "") {
            $this->messages->addErr('Nie podano oprocentowania');
        }
        if ( $this->form->okresSplaty == "") {
            $this->messages->addErr('Nie podano okresu spłaty');
        }
    
        if($this->messages->isError()) return FALSE;
    
            
        if ($this->form->kwotaKredytu <= 0) {
            $this->messages->addErr('Kwota kredytu musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->kwotaKredytu)){
            $this->messages->addErr('Kwota kredytu musi być liczbą!');
        }
        
        if ($this->form->okresSplaty <= 0) {
            $this->messages->addErr('Okres spłaty musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->okresSplaty) || (strpos($this->form->okresSplaty,".") != false)){
            $this->messages->addErr('Okres spłaty musi być liczbą całkowitą!');
        }	
    
        if ($this->form->oprocentowanie <= 0) {
            $this->messages->addErr('Oprocentowanie musi być liczbą dodatnią!');
        }
        else if(!is_numeric($this->form->oprocentowanie)){
            $this->messages->addErr('Oprocentowanie musi być liczbą!');
        }	
    
    
        if(!$this->messages->isError()) return TRUE;
        else return FALSE;
    }

    public function process(){
        $this->getParams();

        if($this->validate()){
            $this->messages->addInfo('Parametry poprawne.');
            $this->calculate();
            $this->messages->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView(){
        global $config;

        $smarty = new Smarty();

        $smarty->setCaching(SMARTY::CACHING_OFF);

        $smarty->assign('config',$config);

        $smarty->assign('page_title','Kalkulator Kredytowy');

        $smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result);
        $smarty->assign('messages',$this->messages);

        $smarty->assign('headerText',"Kalkulator Kredytowy");

        

        $smarty->clearAllCache();

        $smarty->display($config->root_path.'/app/calc.tpl');
    }

}