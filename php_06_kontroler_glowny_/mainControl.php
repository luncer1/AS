<?php

require_once 'init.php';

switch($action){
    default: 

        $controler = new app\controllers\MainMenuControler();
        $controler->generateView();
        break;
    case 'creditCalcCompute':

        $controler = new app\controllers\CreditCalcControler();
        $controler->process();
        break;
    case 'calcCompute':

        $controler = new app\controllers\CalcCtrl();
        $controler->process();
        break;
    }