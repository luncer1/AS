<?php namespace app\controllers; 
use app\transfer\CalcResult;
use app\forms\CalcForm;



class CalcCtrl {

	private $form;  
	private $result; 

	public function __construct(){

		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	

	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->op = getFromRequest('op');
	}
	

	public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			return false;
		}
		
		if ($this->form->x == "") {
			getMessages()->addErr('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
			getMessages()->addErr('Nie podano liczby 2');
		}
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addErr('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addErr('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	

	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			getMessages()->addInfo('Parametry poprawne.');
				
			switch ($this->form->op) {
				case 'minus' :
					if (inRole('admin')) {
						$this->result->result = $this->form->x - $this->form->y;
						$this->result->op_name = '-';
					} else {
						getMessages()->addErr('Tylko administrator może wykonać tę operację');
					}
					break;
				case 'times' :
					$this->result->result = $this->form->x * $this->form->y;
					$this->result->op_name = '*';
					break;
				case 'div' :
					if (inRole('admin')) {
						$this->result->result = $this->form->x / $this->form->y;
						$this->result->op_name = '/';
					} else {
						getMessages()->addErr('Tylko administrator może wykonać tę operację');
					}
					break;
				default :
					$this->result->result = $this->form->x + $this->form->y;
					$this->result->op_name = '+';
					break;
			}
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Kalkulator zwykły');
		getSmarty()->assign('headerText','Kalkulator zwykły');
				
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc.tpl');
	}
}
