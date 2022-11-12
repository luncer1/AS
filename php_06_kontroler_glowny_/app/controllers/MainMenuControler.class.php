<?php namespace app\controllers;

    class MainMenuControler{
        
        public function generateView(){

    
            getSmarty()->assign('page_title','Menu');
    
            getSmarty()->assign('headerText',"Menu główne");
    
    
            getSmarty()->clearAllCache();
    
            getSmarty()->display('mainMenu.tpl');
        }
    }

?>