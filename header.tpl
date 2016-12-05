<!DOCTYPE html>
<head>
	<base href="{$baseURL}" target="_self">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ratatouille</title>
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
		{if isset($bejelentkezve)}
		<div class="menu">
			<a href="adminisztracio"><span>Bejelentkezve! </span></a>
		</div>
		{else}
		<div class="menu">
			<a href="regisztracio"><span>Regisztráció</span></a>
		</div>
		<div class="menu">
			<a href="adminisztracio"><span>Adminisztráció</span></a>
		</div>
		{/if}
	</div>
</div>	

{if isset($bejelentkezve)}
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
{else}
<div class="content">
{/if}	
