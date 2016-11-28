<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 12:45:02
         compiled from "application\views\uj_recept.tpl" */ ?>
<?php /*%%SmartyHeaderCode:446452adcc732ccc01-55559836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76228063c2b85548f39be033ead2123de0dc1489' => 
    array (
      0 => 'application\\views\\uj_recept.tpl',
      1 => 1387367101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446452adcc732ccc01-55559836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52adcc733a4918_59292172',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adcc733a4918_59292172')) {function content_52adcc733a4918_59292172($_smarty_tpl) {?><div id="upload_div">
<form action="feltoltes/adat_feltolt" method="post" enctype="multipart/form-data">
<div class="left">Recept neve:</div>
<div class="right"><input name="nev" type="text"/></div>
<div class="clear"></div>
<div class="left">Kategória:</div>
<div class="right">
<select name="kategoria">
	<option value="1">Előétel</option>
	<option value="2">Főétel</option>
	<option value="3">Desszert</option>
</select>
</div>
<div class="clear"></div>
<div class="left">Nehézség:</div>
<div class="right">
<select name="nehezseg">
	<option value="1">Egyszerű</option>
	<option value="2">Közepes</option>
	<option value="3">Nehéz</option>
</select>
</div>

</select>
</div>
<div class="clear"></div>
<div class="left">Hozzávalók:</div>
<div class="right">
<textarea name="hozzavalok" style="width:400px;height:100px"></textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés:</div>	
<div class="right">
<textarea name="elkeszites" style="width:400px;height:100px"></textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés idő:</div>	
<div class="right">
<input type="text" name="ido"/>
</div>
<div class="clear"></div>
<div class="left" style="padding-top: 5px;">Kép:</div>
<div class="fileUpload right">
    <span class="button">Kép kiválasztás</span>
    <input type="file" class="upload" name="userfile"/>
</div>
<div class="clear"></div>
<div class="right"><input type="submit" class="button" name="adat_feltolt" value="Recept beküldése"/></div>
<div class="clear"></div>
</form>
<div class="right" id="upload_msg"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br /><?php }?></div>
<div class="clear"></div>
</div><?php }} ?>