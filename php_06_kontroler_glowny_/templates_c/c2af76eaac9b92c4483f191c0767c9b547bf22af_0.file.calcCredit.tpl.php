<?php
/* Smarty version 4.2.1, created on 2022-11-12 21:38:22
  from 'C:\xampp\htdocs\php_06_kontroler_glowny\app\views\calcCredit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370043e932ed5_30749440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2af76eaac9b92c4483f191c0767c9b547bf22af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\views\\calcCredit.tpl',
      1 => 1668280728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6370043e932ed5_30749440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11894124436370043e928ba4_88159786', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2735054096370043e92acd1_68427883', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825549936370043e92b160_71735955', 'calc');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_11894124436370043e928ba4_88159786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11894124436370043e928ba4_88159786',
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
class Block_2735054096370043e92acd1_68427883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2735054096370043e92acd1_68427883',
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
class Block_1825549936370043e92b160_71735955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_1825549936370043e92b160_71735955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	

<!--<a href="<?php echo '<?php'; ?>
 //print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->

<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
creditCalcCompute" class="pure-form pure-form-stacked" method="post">

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
