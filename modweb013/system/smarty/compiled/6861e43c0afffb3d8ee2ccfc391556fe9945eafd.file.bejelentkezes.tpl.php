<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 22:25:15
         compiled from "application\views\bejelentkezes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2788552a04cfb022981-08198671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6861e43c0afffb3d8ee2ccfc391556fe9945eafd' => 
    array (
      0 => 'application\\views\\bejelentkezes.tpl',
      1 => 1387315477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2788552a04cfb022981-08198671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a04cfb0d9e95_75604795',
  'variables' => 
  array (
    'hibas_belepes' => 0,
    'uzenet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a04cfb0d9e95_75604795')) {function content_52a04cfb0d9e95_75604795($_smarty_tpl) {?><h1 align='center'>Adminisztráció</h1>
<div  align='center' >
	<h2 align='center'>Bejelentkezés</h2>
	<form method="POST">
		<div  align='center'>
			<div class="block" style="width:200px"> Felhasználó név	</div>
			<div class="block" style="width:200px">	<input type="text" name="felhnev"></div>
			<span class="clear"></span>
			<div class="block" style="width:200px">	Jelszó </div>
			<div class="block" style="width:200px"> <input type="password" name="jelszo"></div>
			<span class="clear"></span>
			<div >	<input type="submit" name="bejelentkezes" value="Belépés">	</div>
		</div>
	</form>
	<p style="width:365px;<?php if (isset($_smarty_tpl->tpl_vars['hibas_belepes']->value)){?>color:#FF0000;font-weight:400<?php }?>"><?php echo $_smarty_tpl->tpl_vars['uzenet']->value;?>
</p>
</div>

<span class="clear"></span>

<?php }} ?>