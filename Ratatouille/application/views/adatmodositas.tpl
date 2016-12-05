<h1>Adatmódosítás</h1>
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
	{if isset($hibaA)}
	<p style="width:365px;color:#ff6600;font-weight:400">Hibásan adta meg régi jelszavát!<br>Kérjük próbálja meg újbol és figyeljen a CAPS-Lock-ra!</p>
	{else}
	<p style="width:365px;">Kérjük adja meg a <b>jelenlegi jelszavát az azonosításhoz</b>!<br><br>A magasabb védelem érdekében nem módosíthat úgy hozzáférési adatokat, hogy ne lenne tisztában a jelenlegi jelszavával!</p>
	{/if}
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
	{if isset($hibaB)}
	<p style="width:365px;color:#ff6600;font-weight:400">{$hibaB}</p>
	{else}
	<p style="width:365px">Az adatok megadása után a rendszer <b>kijelentkezik</b>, így meg kell adnia az új hozzáférési adatokat!</p>
	{/if}
</div>
<span class="clear"></span>

