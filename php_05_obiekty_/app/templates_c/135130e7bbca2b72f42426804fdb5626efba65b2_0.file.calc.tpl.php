<?php
/* Smarty version 4.2.1, created on 2022-11-12 14:40:39
  from 'C:\xampp\htdocs\php_05_obiekty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636fa257433773_71828828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135130e7bbca2b72f42426804fdb5626efba65b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiekty\\app\\calc.tpl',
      1 => 1668260427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636fa257433773_71828828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862420618636fa257429017_77773383', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156132986636fa25742b204_03241699', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112101940636fa25742b6d6_90120971', 'calc');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_862420618636fa257429017_77773383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_862420618636fa257429017_77773383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1>		
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1156132986636fa25742b204_03241699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1156132986636fa25742b204_03241699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Stopka Kalulatora
<?php
}
}
/* {/block 'footer'} */
/* {block 'calc'} */
class Block_112101940636fa25742b6d6_90120971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_112101940636fa25742b6d6_90120971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	

<!--<a href="<?php echo '<?php'; ?>
 //print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->

<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/calc.php" class="pure-form pure-form-stacked" method="post">

	<label for="id_kwota_kredytu">Kwota kedytu[zł]: </label>
	<input id="id_kwota_kredytu" type="text" name="kwotaKredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwotaKredytu;?>
" />

	<label for="id_okres_splaty">Okres spłaty[lata]: </label>
	<input type="text" name="okresSplaty" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okresSplaty;?>
">

	<label for="id_oprocentowanie">Oprocentowanie[%]: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" />

	<input type="submit" class="pure-button pure-button-primary" value="Oblicz" />
</form>

<?php if (($_smarty_tpl->tpl_vars['messages']->value->isError())) {?> 
	<ol class="errors">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?> 
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['messages']->value->isInfo())) {?> 
	<ol class="infos">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?> 
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
<div class="results">
	Rata kredytu: <?php echo number_format($_smarty_tpl->tpl_vars['result']->value->result,2,',',' ');?>
zł
</div>
<?php }?>

<?php
}
}
/* {/block 'calc'} */
}
