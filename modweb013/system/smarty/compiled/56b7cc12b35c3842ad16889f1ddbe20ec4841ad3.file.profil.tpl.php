<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 23:49:25
         compiled from "application\views\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821052a050d0401401-34562536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b7cc12b35c3842ad16889f1ddbe20ec4841ad3' => 
    array (
      0 => 'application\\views\\profil.tpl',
      1 => 1387320561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821052a050d0401401-34562536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a050d04dc108_84279144',
  'variables' => 
  array (
    'usernev' => 0,
    'utolsobelepes' => 0,
    'receptekszama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a050d04dc108_84279144')) {function content_52a050d04dc108_84279144($_smarty_tpl) {?><h1 align='center'>Sikeres bejelentkezés!</h1>
<h2>Általános információk</h2>
<ul>
	<li>Bejelentkezve mint: <b><?php echo $_smarty_tpl->tpl_vars['usernev']->value;?>
</b></li>
	<li>Utoljára bejelentkezve: <b><?php echo $_smarty_tpl->tpl_vars['utolsobelepes']->value;?>
</b></li>
	<li>Feltöltött receptek száma: <a href="adminisztracio/sajat_receptek"><b><?php echo $_smarty_tpl->tpl_vars['receptekszama']->value;?>
 darab</b></a></li>

</ul><?php }} ?>