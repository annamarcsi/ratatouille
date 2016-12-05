<div id="alap2">
<div id="kereses">Keresés</div>
<div class="kereses1">
<form method="post">
	<input type="text" placeholder="Keresés a receptek között.." name="kereses" style="width:163px;">
	<input type="submit" value="Keresés">
</form>
</div>
</div>
{foreach from=$receptek item=recept}
<div class="alap2">
	<div class="img2">
		<img src="images/receptek/{$recept.kep}" >
	</div>
    <div id="szoveg">
	<a href="{$recept.link}?vip=203df82c24ef0b5063d6ac04092a80d21">{$recept.nev}</a>
