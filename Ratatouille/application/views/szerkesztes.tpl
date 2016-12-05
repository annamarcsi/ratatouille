{foreach from=$msg item=adat}
<div id="upload_div">
<form action="sajat/frissit/{$adat.id}" method="post" enctype="multipart/form-data">
<div class="left">Recept neve:</div>
<div class="right"><input name="nev" type="text" value="{$adat.nev}"/></div>
<div class="clear"></div>
<div class="left">Kategória:</div>
<div class="right">
<select name="kategoria">
	<option value="1" {if ($adat.kategoria == "1")}selected{/if}>Előétel</option>
	<option value="2" {if ($adat.kategoria == "2")}selected{/if}>Leves</option>
	<option value="3" {if ($adat.kategoria == "3")}selected{/if}>Főétel</option>
	<option value="4" {if ($adat.kategoria == "4")}selected{/if}>Desszert</option>
	<option value="5" {if ($adat.kategoria == "5")}selected{/if}>Koktélok</option>
</select>
</div>
<div class="clear"></div>
<div class="left">Nehézség:</div>
<div class="right">
<select name="nehezseg">
	<option value="1" {if ($adat.nehezseg == "1")}selected{/if}>Pofonegyszerű</option>
	<option value="2" {if ($adat.nehezseg == "2")}selected{/if}>Egyszerű</option>
	<option value="3" {if ($adat.nehezseg == "3")}selected{/if}>Közepes</option>
	<option value="4" {if ($adat.nehezseg == "4")}selected{/if}>Nehéz</option>
</select>
</div>
<div class="clear"></div>
<div class="left">Árkategória:	</div>
<div class="right">
<select name="arkategoria">
	<option value="1" {if ($adat.arkategoria == "1")}selected{/if}>Olcsó</option>
	<option value="2" {if ($adat.arkategoria == "2")}selected{/if}>Kiadós</option>
	<option value="3" {if ($adat.arkategoria == "3")}selected{/if}>Közepes</option>
	<option value="4" {if ($adat.arkategoria == "4")}selected{/if}>Drága</option>
</select>
</div>
<div class="clear"></div>
<div class="left">Hozzávalók:</div>
<div class="right">
<textarea name="hozzavalok">{$adat.hozzavalok}</textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés:</div>	
<div class="right">
<textarea name="elkeszites">{$adat.elkeszites}</textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés idő:</div>	
<div class="right">
<input type="text" name="ido" value="{$adat.ido}"/>
</div>
<div class="clear"></div>
<div class="right"><input type="submit" class="button" name="adat_feltolt" value="Recept frissítése"/></div>
<div class="clear"></div>
</form>
<div class="right" id="upload_msg">{if isset($msg2)}{$msg}<br />{/if}</div>
<div class="clear"></div>
</div>
{/foreach}
