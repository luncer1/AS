<?php
/* Smarty version 4.2.1, created on 2022-11-12 12:23:36
  from '/Applications/XAMPP/xamppfiles/htdocs/php_04_szablonowanie/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636f8238b00c83_28020380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7accc2057568aefc5de4c07f7b5febea549035d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php_04_szablonowanie/templates/main.tpl',
      1 => 1668250169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f8238b00c83_28020380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
		integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" />
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Default title" ?? null : $tmp);?>
</title>
</head>

<body>
	<div class="header">
		<h1>Kalulator Kredytowy</h1>
	</div>
	<div class="calc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_391072646636f8238afff68_63400012', 'calc');
?>
</div>

	<div class="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1245699439636f8238b00768_72607221', 'footer');
?>
</div>
</body>

</html><?php }
/* {block 'calc'} */
class Block_391072646636f8238afff68_63400012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_391072646636f8238afff68_63400012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default calc <?php
}
}
/* {/block 'calc'} */
/* {block 'footer'} */
class Block_1245699439636f8238b00768_72607221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1245699439636f8238b00768_72607221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
