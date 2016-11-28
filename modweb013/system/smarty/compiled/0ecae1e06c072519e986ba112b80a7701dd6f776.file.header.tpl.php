<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 16:04:35
         compiled from "application\views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32596524bc851ba7306-24180598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ecae1e06c072519e986ba112b80a7701dd6f776' => 
    array (
      0 => 'application\\views\\header.tpl',
      1 => 1387379073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32596524bc851ba7306-24180598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bc851c1d532_94850192',
  'variables' => 
  array (
    'baseURL' => 0,
    'bejelentkezve' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bc851c1d532_94850192')) {function content_524bc851c1d532_94850192($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
" target="_self">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Modweb 013</title>
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="images/site.css">
</head>
<body>
	
<div class="menu1">
	<div class="menu">
		<a href="receptek"><span>Receptkönyv</span></a>
	</div>
	<div class="menu">
		<a href="nap_receptje"><span>Nap receptje</span></a>
	</div>
	<div class="menu">
	<a href="kereses"><span>Keresés</span></a>
	</div>
	<div class="float-right">
		<?php if (isset($_smarty_tpl->tpl_vars['bejelentkezve']->value)){?>
		<div class="menu">
			<a href="adminisztracio"><span>Bejelentkezve! </span></a>
		</div>
		<?php }else{ ?>
		<div class="menu">
			<a href="regisztracio"><span>Regisztráció</span></a>
		</div>
		<div class="menu">
			<a href="adminisztracio"><span>Adminisztráció</span></a>
		</div>
		<?php }?>
	</div>
</div>	

<?php if (isset($_smarty_tpl->tpl_vars['bejelentkezve']->value)){?>
<div class="menu2">
	<div class="menu">
		<a href="adminisztracio/uj_recept"><span>Recept beküldése</span></a>
	</div>
	<div class="menu">
		<a href="adminisztracio/sajat_receptek"><span>Feltöltött receptek</span></a>
	</div>
	<div class="menu">
		<a href="adminisztracio/kedvenc_receptek"><span>Kedvenc receptek</span></a>
	</div>	

	<div class="float-right">

		<div class="menu">
			<a href="adminisztracio/kilepes"><span>Kijelentkezés</span></a>
		</div>
		<div>

		</div>
	</div>
</div>
<div class="content" style="padding-top:30px">
<?php }else{ ?>
<div class="content">
<?php }?>	<?php }} ?>