<?php /* Smarty version Smarty-3.1.14, created on 2016-11-28 13:47:08
         compiled from "application\views\recept.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193052ade93c494422-75452598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b47fbabc444504485b11033b8dd280a534bb819c' => 
    array (
      0 => 'application\\views\\recept.tpl',
      1 => 1480337225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193052ade93c494422-75452598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ade93cb317a0_66893842',
  'variables' => 
  array (
    'recept' => 0,
    'nap_receptje' => 0,
    'belepve' => 0,
    'kedvenc' => 0,
    'hozzavalo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ade93cb317a0_66893842')) {function content_52ade93cb317a0_66893842($_smarty_tpl) {?><div class="float-right" style="padding-top:20px">
	<a href="images/etelek/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
_b.jpg" target="_blank">
		<div class="imgbox" style="float:left;height:225px">
			<img src="images/etelek/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
.jpg" style="width:300px; height:300px; padding-top:100px; padding-right:25px">
		</div>
	</a>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['nap_receptje']->value)){?>
<h1>Nap receptje</h1><h2><?php echo $_smarty_tpl->tpl_vars['recept']->value['nev'];?>
</h2>
<?php }else{ ?>
<h1 align="left"><?php echo $_smarty_tpl->tpl_vars['recept']->value['nev'];?>

	<?php if (isset($_smarty_tpl->tpl_vars['belepve']->value)){?>
	&nbsp;
	<?php if (isset($_smarty_tpl->tpl_vars['kedvenc']->value)){?>
	<a href="adminisztracio/kedvenc_torlese/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
">
		<img src="images/favorite.png" style="width:20px;height:20px" title="Eltávolítás a kedvencek közül">
	</a>
	<?php }else{ ?>
	<a href="adminisztracio/kedvenc_hozzaadasa/<?php echo $_smarty_tpl->tpl_vars['recept']->value['id'];?>
">
		<img class="hover" src="images/favorite.png" style="width:20px;height:20px" title="Hozzáadás a kedvencekhez">
	</a>
	<?php }?>
	<?php }?>
</h1>
<?php }?>
<div>
<table>
	<tr>
		<td style="padding-top:35px;">
			<h2>Hozzávalók</h2>
			<ul>
			<?php  $_smarty_tpl->tpl_vars['hozzavalo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hozzavalo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recept']->value['hozzavalok']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hozzavalo']->key => $_smarty_tpl->tpl_vars['hozzavalo']->value){
$_smarty_tpl->tpl_vars['hozzavalo']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['hozzavalo']->value;?>
</li>
			<?php } ?>
			</ul>
		</td>
		<td>
			<h2>Tulajdonságok</h2>
			<ul>
				<li>Kategória: <b><?php echo $_smarty_tpl->tpl_vars['recept']->value['kategorianev'];?>
</b></a></li>
				<li>Elkészítési idő: <b>40 perc</b></li>
				<li>Nehézség: <b><?php echo $_smarty_tpl->tpl_vars['recept']->value['nehezseg'];?>
</b></a></li>
				<li>Mennyiség: <b><?php echo $_smarty_tpl->tpl_vars['recept']->value['mennyiseg'];?>
 személyre</b></a></li>
				<li>Megtekintve: <b>1 alkalommal</b></li>
				<li>Beküldő: <b><?php echo $_smarty_tpl->tpl_vars['recept']->value['szerzo'];?>
</b></a></li>
			</ul>
		</td>
	</tr>
</table>
</div><span class="clear"></span>
<h2 style="padding-top:100px;"><?php echo $_smarty_tpl->tpl_vars['recept']->value['nev'];?>
 elkészítése</h2>
<p><?php echo $_smarty_tpl->tpl_vars['recept']->value['elkeszites'];?>
</p>
<?php }} ?>