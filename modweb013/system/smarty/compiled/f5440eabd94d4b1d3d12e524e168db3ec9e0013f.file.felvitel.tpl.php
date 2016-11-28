<?php /* Smarty version Smarty-3.1.14, created on 2013-12-03 10:57:38
         compiled from "application\views\felvitel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227605298d0939488b0-93387389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5440eabd94d4b1d3d12e524e168db3ec9e0013f' => 
    array (
      0 => 'application\\views\\felvitel.tpl',
      1 => 1386064654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227605298d0939488b0-93387389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5298d0939df2b1_25440151',
  'variables' => 
  array (
    'hiba' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298d0939df2b1_25440151')) {function content_5298d0939df2b1_25440151($_smarty_tpl) {?><div style="font-size:16px;padding-bottom:10px">Recept feltöltés</div>
<form method="POST">
	<div style="float:left;width:120px">Recept név</div>
	<div style="float:left"><input type="text" name="receptname"></div>
	<div style="clear:both"></div>
	
	<div style="float:left;width:120px">Kategória</div>
	<div style="float:left"><input type="text" name="kat"></div>
	<div style="clear:both"></div>
	
	<div style="float:left;width:120px">Elkészítés</div>
	<div style="float:left"><input type="text" name="elk"></div>
	<div style="clear:both"></div>
	
	<div style="float:left;width:120px">Hozzávalók</div>
	<div style="float:left"><input type="text" name="hozz"></div>
	<div style="clear:both"></div>
	
	<div style="float:left;width:120px">Szerző</div>
	<div style="float:left"><input type="text" name="szer"></div>
	<div style="clear:both"></div>
	
	<div style="padding:10px;padding-left:120px;color:#ff6622"><?php echo $_smarty_tpl->tpl_vars['hiba']->value;?>
</div>
	
	
	<div style="padding-left:120px">
		<input type="submit" name="kuldes" value="Küldés">
	</div>
</form>

<?php }} ?>