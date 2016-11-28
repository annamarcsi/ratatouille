<h1 align='center'>Kedvenc receptek</h1>
{if isset($uzenet)}{$uzenet}{/if}
{if isset($receptek)}
{foreach from=$receptek item=recept}
<div class="float" style="width:420px; padding:20px">
	<div class="imgbox" style="float:left;height:60px;margin-bottom:5px">
		<img src="images/etelek/{$recept.id}.jpg" style="width:80px">
	</div>
	<div style="padding-left:100px">
		<div style="font-size:16px;margin-bottom:5px">
			<a href="{$recept.link}">{$recept.nev}</a>
		</div>
		<div>Kategória: {$recept.kategorianev} | Feltöltve: {$recept.hozzaadva}</div>
		<div><a href="adminisztracio/kedvenc_torlese/{$recept.id}/admin">Törlés a kedvencek közül</a></div>
	</div>
	<div style="clear:both"></div>
</div>
{/foreach}
{/if}
<div style="clear:both"></div>