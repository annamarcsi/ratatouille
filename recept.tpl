<div class="float-right" style="padding-top:20px">
	<a href="images/etelek/{$recept.id}_b.jpg" target="_blank">
		<div class="imgbox" style="float:left;height:225px">
			<img src="images/etelek/{$recept.id}.jpg" style="width:300px; height:300px; padding-top:100px; padding-right:25px">
		</div>
	</a>
</div>
{if isset($nap_receptje)}
<h1>Nap receptje</h1><h2>{$recept.nev}</h2>
{else}
<h1 align="left">{$recept.nev}
	{if isset($belepve)}
	&nbsp;
	{if isset($kedvenc)}
	<a href="adminisztracio/kedvenc_torlese/{$recept.id}">
		<img src="images/favorite.png" style="width:20px;height:20px" title="Eltávolítás a kedvencek közül">
	</a>
	{else}
	<a href="adminisztracio/kedvenc_hozzaadasa/{$recept.id}">
		<img class="hover" src="images/favorite.png" style="width:20px;height:20px" title="Hozzáadás a kedvencekhez">
	</a>
	{/if}
	{/if}
</h1>
{/if}
<div>
<table>
	<tr>
		<td style="padding-top:35px;">
			<h2>Hozzávalók</h2>
			<ul>
			{foreach from=$recept.hozzavalok item=hozzavalo}
				<li>{$hozzavalo}</li>
			{/foreach}
			</ul>
		</td>
		<td>
			<h2>Tulajdonságok</h2>
			<ul>
				<li>Kategória: <b>{$recept.kategorianev}</b></a></li>
				<li>Elkészítési idő: <b>40 perc</b></li>
				<li>Nehézség: <b>{$recept.nehezseg}</b></a></li>
				<li>Mennyiség: <b>{$recept.mennyiseg} személyre</b></a></li>
				<li>Megtekintve: <b>1 alkalommal</b></li>
				<li>Beküldő: <b>{$recept.szerzo}</b></a></li>
			</ul>
		</td>
	</tr>
</table>
</div><span class="clear"></span>
<h2 style="padding-top:100px;">{$recept.nev} elkészítése</h2>
<p>{$recept.elkeszites}</p>
