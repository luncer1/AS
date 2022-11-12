<?php

$config->server_name = 'localhost:80';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/php_06_kontroler_glowny';
$config->action_root = $config->app_root.'/mainControl.php?action=';



$config->app_url = $config->server_url.$config->app_root;
$config->action_url = $config->server_url.$config->action_root;
$config->root_path = dirname(__FILE__);
?>