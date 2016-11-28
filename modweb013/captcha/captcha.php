<?php
function captcha_num2(){
return '
<script>
function js7(){
captcha_num2.src="captcha/captcha_num2.php?"+Math.random()+""
}
</script>
<img src="captcha/captcha_num2" border="0" width="150" height="50" style="margin-top: 3px;border: 1px solid rgb(162, 162, 162);" name="captcha_num2"><br>
<table border="0">
<tr>
<td><input type="text" name="captcha_num2" style="margin-left: 70px;"></td>
<td><img border=0 src="captcha/refresh.png" width="20" height="20" title="Captcha frissítése" onclick="js7()" style="cursor:pointer"></td>
</tr>
</table>
';
}
?>
