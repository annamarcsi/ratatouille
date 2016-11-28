<?php /* Smarty version Smarty-3.1.14, created on 2013-10-16 16:07:33
         compiled from "application\views\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28682525e9d4b15faa7-88277517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8989d6210670790e9c6c5b341cdd07291ea425b8' => 
    array (
      0 => 'application\\views\\reg.tpl',
      1 => 1381932451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28682525e9d4b15faa7-88277517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e9d4b3aa173_92269644',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e9d4b3aa173_92269644')) {function content_525e9d4b3aa173_92269644($_smarty_tpl) {?><form>
Felhasznalonév: <input type="text" name="felhasznalonev"><br>
Jelszó: <input type="password" name="jelszo1"><br>
Jelszó mégegyszer: <input type="password" name="jelszo2"><br>
<input type="submit" value="Küldés">
</form><?php }} ?>