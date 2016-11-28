<div id="upload_div">
<form action="feltoltes/adat_feltolt" method="post" enctype="multipart/form-data">
<div class="left">Recept neve:</div>
<div class="right"><input name="nev" type="text"/></div>
<div class="clear"></div>
<div class="left">Kategória:</div>
<div class="right">
<select name="kategoria">
	<option value="1">Előétel</option>
	<option value="2">Főétel</option>
	<option value="3">Desszert</option>
</select>
</div>
<div class="clear"></div>
<div class="left">Nehézség:</div>
<div class="right">
<select name="nehezseg">
	<option value="1">Egyszerű</option>
	<option value="2">Közepes</option>
	<option value="3">Nehéz</option>
</select>
</div>

</select>
</div>
<div class="clear"></div>
<div class="left">Hozzávalók:</div>
<div class="right">
<textarea name="hozzavalok" style="width:400px;height:100px"></textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés:</div>	
<div class="right">
<textarea name="elkeszites" style="width:400px;height:100px"></textarea>
</div>
<div class="clear"></div>
<div class="left">Elkészítés idő:</div>	
<div class="right">
<input type="text" name="ido"/>
</div>
<div class="clear"></div>
<div class="left" style="padding-top: 5px;">Kép:</div>
<div class="fileUpload right">
    <span class="button">Kép kiválasztás</span>
    <input type="file" class="upload" name="userfile"/>
</div>
<div class="clear"></div>
<div class="right"><input type="submit" class="button" name="adat_feltolt" value="Recept beküldése"/></div>
<div class="clear"></div>
</form>
<div class="right" id="upload_msg">{if isset($msg)}{$msg}<br />{/if}</div>
<div class="clear"></div>
</div>