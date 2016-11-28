<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 22:55:03
         compiled from "application\views\torles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800152b0c7f28415d0-41848354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b6809cd8f362506eca651c410fc8730518f32fe' => 
    array (
      0 => 'application\\views\\torles.tpl',
      1 => 1387317302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800152b0c7f28415d0-41848354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0c7f28f16a8_56196138',
  'variables' => 
  array (
    'receptadat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0c7f28f16a8_56196138')) {function content_52b0c7f28f16a8_56196138($_smarty_tpl) {?><h1 align='center'>Recept törlése</h1>
<h2>Megerősítés</h2>
<p>Recept neve: <b><?php echo $_smarty_tpl->tpl_vars['receptadat']->value['nev'];?>
</b>
<br>Biztos törölni akarod a kijelölt receptet?</p>
<p>
	<a href="adminisztracio/torles/<?php echo $_smarty_tpl->tpl_vars['receptadat']->value['id'];?>
/megerositve"><input type="button" value="Igen"></a>
	<a href="adminisztracio/sajat_receptek"><input type="button" value="Nem"></a>
</p><?php }} ?>