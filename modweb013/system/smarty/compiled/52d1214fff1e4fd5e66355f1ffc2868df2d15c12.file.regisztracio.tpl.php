<?php /* Smarty version Smarty-3.1.14, created on 2016-11-28 13:55:38
         compiled from "application\views\regisztracio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2589652832ed9878124-29940460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d1214fff1e4fd5e66355f1ffc2868df2d15c12' => 
    array (
      0 => 'application\\views\\regisztracio.tpl',
      1 => 1480337736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2589652832ed9878124-29940460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52832ed98f7ca9_83713578',
  'variables' => 
  array (
    'hibas_regisztracio' => 0,
    'uzenet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52832ed98f7ca9_83713578')) {function content_52832ed98f7ca9_83713578($_smarty_tpl) {?><h1 align='center'>Regisztráció</h1>
<div align='center'>
	<h2 align='center'>Felhasználói adatok</h2>
	<form method="POST">
		<div class="adatok">
			<div class="block" style="width:200px">	Felhasználó név	</div>
			<div class="block" style="width:200px">	<input type="text" name="felhnev">	</div>
			<span class="clear"></span>
			<div class="block" style="width:200px">	Jelszó </div>
			<div class="block" style="width:200px">	<input type="password" name="jelszo1">	</div>
			<span class="clear"></span>
			<div class="block" style="width:200px">	Jelszó mégegyszer </div>
			<div class="block" style="width:200px">	<input type="password" name="jelszo2"> </div>
			<span class="clear"></span>
			
			

</table>
  
			<div> <input type="submit" name="regisztracio" value="Regisztráció">	</div>
		</div>
	</form>
	<p style="width:365px;<?php if (isset($_smarty_tpl->tpl_vars['hibas_regisztracio']->value)){?>color:#FF0000;font-weight:400<?php }?>"><?php echo $_smarty_tpl->tpl_vars['uzenet']->value;?>
</p>
</div><?php }} ?>