<?php
/* Smarty version 4.2.1, created on 2022-11-12 14:43:07
  from 'C:\xampp\htdocs\php_05_obiekty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636fa2ebcf28d8_80280351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0668581dbf4107d8458251c7fb0b77ab3c8cb3fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiekty\\templates\\main.tpl',
      1 => 1668260444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636fa2ebcf28d8_80280351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
		integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/css/style.css" />
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Default title" ?? null : $tmp);?>
</title>
</head>

<body>
	<div class="header">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1599528679636fa2ebcf1756_43767985', 'header');
?>

	</div>
	<div class="calc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_546065632636fa2ebcf1f33_73872343', 'calc');
?>
</div>

	<div class="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121488582636fa2ebcf2441_40958799', 'footer');
?>
</div>
</body>

</html><?php }
/* {block 'header'} */
class Block_1599528679636fa2ebcf1756_43767985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1599528679636fa2ebcf1756_43767985',
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
class Block_546065632636fa2ebcf1f33_73872343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_546065632636fa2ebcf1f33_73872343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default calc <?php
}
}
/* {/block 'calc'} */
/* {block 'footer'} */
class Block_121488582636fa2ebcf2441_40958799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_121488582636fa2ebcf2441_40958799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
