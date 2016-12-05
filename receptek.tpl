<!-- <form action="adminisztracio" method="POST">
 <input type="text" name="keres" />
 <input type="submit" />
</form>-->
{foreach from=$receptek item=recept}
<div>
	<div class="imgbox" style="float:left;height:150px">
		<img src="images/etelek/{$recept.id}.jpg" style="width:200px; height:200px">
	</div>
	<div style="padding-left:225px">
		<h2><a href="{$recept.link}">{$recept.nev}</a></h2>
		<p>{$recept.leiras}</p>
		<div class="float" style="font-size:13px;margin-top:6px">
			<a href="{$recept.link}">Teljes recept</a><br><br>
			Szerző: {$recept.szerzo} | Feltöltve: {$recept.hozzaadva}
		</div>
		<div class="float-right" style="font-size:13px;margin-top:6px;text-align:right">
			<br>
			<br><br>
			Nehézség: {$recept.nehezseg}<br>
		</div>
	</div>
	<div style="clear:both"></div>
</div>
{/foreach}
