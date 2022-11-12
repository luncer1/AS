<?php
/* Smarty version 4.2.1, created on 2022-11-12 21:39:54
  from 'C:\xampp\htdocs\php_06_kontroler_glowny\app\views\mainMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370049a262644_57645434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99ceb0f11a2debcdd26b852d0c130faae7ff27c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\views\\mainMenu.tpl',
      1 => 1668281116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6370049a262644_57645434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1514863756370049a25f394_27619483', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19179430456370049a2616a0_51544620', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19826653156370049a261b57_12402720', 'calc');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1514863756370049a25f394_27619483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1514863756370049a25f394_27619483',
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
class Block_19179430456370049a2616a0_51544620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19179430456370049a2616a0_51544620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Stopka menu
<?php
}
}
/* {/block 'footer'} */
/* {block 'calc'} */
class Block_19826653156370049a261b57_12402720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_19826653156370049a261b57_12402720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="menu">
		<li>
			<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
calcCompute" method="post">
				<button type="submit" class="pure-button">Kalkulator Zwykły</button>
			</form>
		</li>

		<li>
			<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
creditCalcCompute" method="post">
				<button type="submit" class="pure-button">Kalkulator Kredytowy</button>
			</form>
		</li>
	</ul>

<?php
}
}
/* {/block 'calc'} */
}
