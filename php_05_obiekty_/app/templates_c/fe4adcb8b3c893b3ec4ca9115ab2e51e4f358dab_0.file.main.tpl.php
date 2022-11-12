<?php
/* Smarty version 4.2.1, created on 2022-11-12 14:40:46
  from 'C:\xampp\htdocs\php_05_obiekty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636fa25e2e79e8_24345953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4adcb8b3c893b3ec4ca9115ab2e51e4f358dab' => 
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
function content_636fa25e2e79e8_24345953 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_639238601636fa25e2e6972_51656319', 'header');
?>

	</div>
	<div class="calc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1877997531636fa25e2e7089_41197725', 'calc');
?>
</div>

	<div class="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30703405636fa25e2e7587_38591709', 'footer');
?>
</div>
</body>

</html><?php }
/* {block 'header'} */
class Block_639238601636fa25e2e6972_51656319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_639238601636fa25e2e6972_51656319',
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
class Block_1877997531636fa25e2e7089_41197725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_1877997531636fa25e2e7089_41197725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default calc <?php
}
}
/* {/block 'calc'} */
/* {block 'footer'} */
class Block_30703405636fa25e2e7587_38591709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_30703405636fa25e2e7587_38591709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
