<?php /* Smarty version Smarty-3.1.14, created on 2016-11-25 12:08:35
         compiled from "application\views\receptek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10034525e974513cdf9-10067417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea7ff732563249bf3d1709c48283c48cea6ebca' => 
    array (
      0 => 'application\\views\\receptek.tpl',
      1 => 1480072112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10034525e974513cdf9-10067417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e97451a4338_15089530',
  'variables' => 
  array (
    'receptek' => 0,
    'recept' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e97451a4338_15089530')) {function content_525e97451a4338_15089530($_smarty_tpl) {?><!-- <form action="adminisztracio" method="POST">
 <input type="text" name="keres" />
 <input type="submit" />
</form>-->
<?php  $_smarty_tpl->tpl_vars['recept'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recept']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['receptek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recept']->key => $_smarty_tpl->tpl_vars['recept']->value){
$_smarty_tpl->tpl_vars['recept']->_loop = true;
?>
<div>
	<div class="imgbox" style="float:left;height:150px">
		<img src="images/etelek/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
.jpg" style="width:200px; height:200px">
	</div>
	<div style="padding-left:225px">
		<h2><a href="<?php echo $_smarty_tpl->tpl_vars['recept']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['recept']->value['nev'];?>
</a></h2>
		<p><?php echo $_smarty_tpl->tpl_vars['recept']->value['leiras'];?>
</p>
		<div class="float" style="font-size:13px;margin-top:6px">
			<a href="<?php echo $_smarty_tpl->tpl_vars['recept']->value['link'];?>
">Teljes recept</a><br><br>
			Szerző: <?php echo $_smarty_tpl->tpl_vars['recept']->value['szerzo'];?>
 | Feltöltve: <?php echo $_smarty_tpl->tpl_vars['recept']->value['hozzaadva'];?>

		</div>
		<div class="float-right" style="font-size:13px;margin-top:6px;text-align:right">
			<br>
			<br><br>
			Nehézség: <?php echo $_smarty_tpl->tpl_vars['recept']->value['nehezseg'];?>
<br>
		</div>
	</div>
	<div style="clear:both"></div>
</div>
<?php } ?><?php }} ?>