<?php

require_once 'init.php';

getRouter()->setDefaultRoute('showMenu');

getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('showMenu','MainMenuControler');
getRouter()->addRoute('creditCalcCompute',    'CreditCalcControler',['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login','LoginControler');
getRouter()->addRoute('logout', 'LoginControler', ['user','admin']);

getRouter()->go();