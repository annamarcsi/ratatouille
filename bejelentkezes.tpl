<h1 align='center'>Adminisztráció</h1>
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
	<p style="width:365px;{if isset($hibas_belepes)}color:#FF0000;font-weight:400{/if}">{$uzenet}</p>
</div>

<span class="clear"></span>

