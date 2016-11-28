<?php /* Smarty version Smarty-3.1.14, created on 2013-12-15 16:51:55
         compiled from "application\views\adatmodositas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537552add01bb0b6a6-93558234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6bcbb3c6727a936af19b85e5f69001f0041e8bd' => 
    array (
      0 => 'application\\views\\adatmodositas.tpl',
      1 => 1386622412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537552add01bb0b6a6-93558234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hibaA' => 0,
    'hibaB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52add01bc02297_61459768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52add01bc02297_61459768')) {function content_52add01bc02297_61459768($_smarty_tpl) {?><h1>Adatmódosítás</h1>
<div class="float-left" style="width:400px;padding-right:10px;border-right:1px solid #ccc">
	<h2>1. lépés: Azonosítás</h2>
	<form method="POST">
		<div class="data">
			<div class="block" style="width:200px">
				Előző jelszó
			</div>
			<div class="block" style="width:200px">
				<input type="password" name="jelszo_regi">
			</div>
			<span class="clear"></span>
		</div>
	<?php if (isset($_smarty_tpl->tpl_vars['hibaA']->value)){?>
	<p style="width:365px;color:#ff6600;font-weight:400">Hibásan adta meg régi jelszavát!<br>Kérjük próbálja meg újbol és figyeljen a CAPS-Lock-ra!</p>
	<?php }else{ ?>
	<p style="width:365px;">Kérjük adja meg a <b>jelenlegi jelszavát az azonosításhoz</b>!<br><br>A magasabb védelem érdekében nem módosíthat úgy hozzáférési adatokat, hogy ne lenne tisztában a jelenlegi jelszavával!</p>
	<?php }?>
</div>
<div class="float-right" style="width:400px">
	<h2>2. lépés: Új hozzáférési adatok</h2>
		<div class="data">
			<div class="block" style="width:200px">
				Új jelszó
			</div>
			<div class="block" style="width:200px">
				<input type="password" name="jelszo1">
			</div>
			<span class="clear"></span>
			<div class="block" style="width:200px">
				Jelszó mégegyszer
			</div>
			<div class="block" style="width:200px">
				<input type="password" name="jelszo2">
			</div>
			<span class="clear"></span>
			<div style="padding-left:200px">
				<input type="submit" name="modositas" value="Módosítás">
			</div>
		</div>
	</form>
	<?php if (isset($_smarty_tpl->tpl_vars['hibaB']->value)){?>
	<p style="width:365px;color:#ff6600;font-weight:400"><?php echo $_smarty_tpl->tpl_vars['hibaB']->value;?>
</p>
	<?php }else{ ?>
	<p style="width:365px">Az adatok megadása után a rendszer <b>kijelentkezik</b>, így meg kell adnia az új hozzáférési adatokat!</p>
	<?php }?>
</div>
<span class="clear"></span>
<?php }} ?>