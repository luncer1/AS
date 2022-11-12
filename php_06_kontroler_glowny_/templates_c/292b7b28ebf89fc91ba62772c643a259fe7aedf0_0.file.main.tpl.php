<?php
/* Smarty version 4.2.1, created on 2022-11-12 21:38:17
  from 'C:\xampp\htdocs\php_06_kontroler_glowny\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370043908fc27_54576848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292b7b28ebf89fc91ba62772c643a259fe7aedf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\views\\templates\\main.tpl',
      1 => 1668260444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6370043908fc27_54576848 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3023294106370043908ef59_92760955', 'header');
?>

	</div>
	<div class="calc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17445274826370043908f4e5_53344892', 'calc');
?>
</div>

	<div class="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13061376946370043908f8d2_85536130', 'footer');
?>
</div>
</body>

</html><?php }
/* {block 'header'} */
class Block_3023294106370043908ef59_92760955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3023294106370043908ef59_92760955',
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
class Block_17445274826370043908f4e5_53344892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_17445274826370043908f4e5_53344892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default calc <?php
}
}
/* {/block 'calc'} */
/* {block 'footer'} */
class Block_13061376946370043908f8d2_85536130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13061376946370043908f8d2_85536130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
