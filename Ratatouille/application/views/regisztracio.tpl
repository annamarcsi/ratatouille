<h1 align='center'>Regisztráció</h1>
<div align='center'>
	<h2 align='center'>Felhasználói adatok</h2>
	<form method="POST">
		<div class="adatok">
			<div class="block" style="width:200px">	Felhasználó név	</div>
			<div class="block" style="width:200px">	<input type="text" name="felhnev">	</div>
			<span class="clear"></span>
			<div class="block" style="width:200px">	Jelszó </div>
			<div class="block" style="width:200px">	<input type="password" name="jelszo1">	</div>
			<span class="clear"></span>
			<div class="block" style="width:200px">	Jelszó mégegyszer </div>
			<div class="block" style="width:200px">	<input type="password" name="jelszo2"> </div>
			<span class="clear"></span>
			
			

</table>
  
			<div> <input type="submit" name="regisztracio" value="Regisztráció">	</div>
		</div>
	</form>
	<p style="width:365px;{if isset($hibas_regisztracio)}color:#FF0000;font-weight:400{/if}">{$uzenet}</p>
</div>
