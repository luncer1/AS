<?php
/* Smarty version 4.2.1, created on 2022-11-12 12:54:36
  from 'C:\xampp\htdocs\php_04_szablonowanie\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636f897cde22d4_36518194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25264006038ea17ba1f5fb858b4d12d23a0e9959' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablonowanie\\templates\\main.tpl',
      1 => 1668253988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f897cde22d4_36518194 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_775914088636f897cde1364_09177645', 'header');
?>

	</div>
	<div class="calc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836692805636f897cde1952_70295163', 'calc');
?>
</div>

	<div class="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1829926058636f897cde1e61_91445665', 'footer');
?>
</div>
</body>

</html><?php }
/* {block 'header'} */
class Block_775914088636f897cde1364_09177645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_775914088636f897cde1364_09177645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			Default header
		<?php
}
}
/* {/block 'header'} */
/* {block 'calc'} */
class Block_1836692805636f897cde1952_70295163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_1836692805636f897cde1952_70295163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default calc <?php
}
}
/* {/block 'calc'} */
/* {block 'footer'} */
class Block_1829926058636f897cde1e61_91445665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1829926058636f897cde1e61_91445665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
