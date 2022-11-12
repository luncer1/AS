<?php
/* Smarty version 4.2.1, created on 2022-11-12 12:23:36
  from '/Applications/XAMPP/xamppfiles/htdocs/php_04_szablonowanie/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636f8238af1115_35368258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df23204647dba73f435738ae73897639ef30a90' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php_04_szablonowanie/app/calc.tpl',
      1 => 1668251988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f8238af1115_35368258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_345569825636f8238ad0ed1_55003941', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1081365585636f8238ad85e2_64081328', 'calc');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_345569825636f8238ad0ed1_55003941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_345569825636f8238ad0ed1_55003941',
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
class Block_1081365585636f8238ad85e2_64081328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_1081365585636f8238ad85e2_64081328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	

<!--<a href="<?php echo '<?php'; ?>
 //print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" class="pure-form pure-form-stacked" method="post">

	<label for="id_kwota_kredytu">Kwota kedytu[zł]: </label>
	<input id="id_kwota_kredytu" type="text" name="kwotaKredytu" value="<?php echo $_smarty_tpl->tpl_vars['kwotaKredytu']->value;?>
" />

	<label for="id_okres_splaty">Okres spłaty[lata]: </label>
	<input type="text" name="okresSplaty" value="<?php echo $_smarty_tpl->tpl_vars['okresSplaty']->value;?>
">

	<label for="id_oprocentowanie">Oprocentowanie[%]: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['oprocentowanie']->value;?>
" />

	<input type="submit" class="pure-button pure-button-primary" value="Oblicz" />
</form>

<?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?> 
	<?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?> 
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
	Rata kredytu: <?php echo number_format($_smarty_tpl->tpl_vars['result']->value,2,',',' ');?>
zł
</div>
<?php }?>

<?php
}
}
/* {/block 'calc'} */
}
