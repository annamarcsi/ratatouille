<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 02:12:05
         compiled from "application\views\receptek_sajat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753452adce35c22461-86581471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20057acbb99070589773b01fe35f4abf0f03f36' => 
    array (
      0 => 'application\\views\\receptek_sajat.tpl',
      1 => 1387329120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753452adce35c22461-86581471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52adce35d96507_92583525',
  'variables' => 
  array (
    'uzenet' => 0,
    'receptek' => 0,
    'recept' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adce35d96507_92583525')) {function content_52adce35d96507_92583525($_smarty_tpl) {?><h1 align='center'>Feltöltött receptek</h1>
<?php if (isset($_smarty_tpl->tpl_vars['uzenet']->value)){?><?php echo $_smarty_tpl->tpl_vars['uzenet']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['receptek']->value)){?>
<?php  $_smarty_tpl->tpl_vars['recept'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recept']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['receptek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recept']->key => $_smarty_tpl->tpl_vars['recept']->value){
$_smarty_tpl->tpl_vars['recept']->_loop = true;
?>
<div class="float" style="width:420px; padding:20px">
	<div class="imgbox" style="float:left;height:60px;margin-bottom:5px">
		<img src="images/etelek/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
.jpg" style="width:80px">
	</div>
	<div style="padding-left:100px">
		<div style="font-size:16px;margin-bottom:5px">
			<a href="<?php echo $_smarty_tpl->tpl_vars['recept']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['recept']->value['nev'];?>
</a>
		</div>
		<div>Kategória: <?php echo $_smarty_tpl->tpl_vars['recept']->value['kategorianev'];?>
 | Feltöltve: <?php echo $_smarty_tpl->tpl_vars['recept']->value['hozzaadva'];?>
</div>
		<div>
			<a href="adminisztracio/szerkesztes/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
">Szerkesztés</a> | 
			<a href="adminisztracio/torles/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
">Törlés</a></div>
	</div>
	<div style="clear:both"></div>
</div>
<?php } ?>
<?php }?>
<div style="clear:both"></div><?php }} ?>