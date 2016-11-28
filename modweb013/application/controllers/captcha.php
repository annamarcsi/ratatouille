<?php
session_start();
$a=MT_RAND('1','9');
$b=MT_RAND('1','9');
$c=MT_RAND('1','9');
$d=array('száz','kétszáz','háromszáz','négyszáz','ötszáz','hatszáz','hétszáz','nyolcszáz','kilencszáz');
$e=array('tizen','huszon','harminc','negyven','ötven','hatvan','hetven','nyolcvan','kilencven');
$f=array('egy','kettö','három','négy','öt','hat','hét','nyolc','kilenc');
$g=$d[$a-'1'];
$h=$e[$b-'1'];
$i=$f[$c-'1'];
$text=$g.$h.$i;
$_SESSION['captcha_num2']=$a.$b.$c;
$im = @ imagecreate ( 350 , 30 );//kép generálása
$background_color = imagecolorallocate ( $im , rand('0','255') , rand('0','255') , rand('0','255') );//háttérszín
$text_color = imagecolorallocate ( $im , rand('0','255') , rand('0','255') , rand('0','255') );//szöveg szín
imagettftext ( $im , 25 , 0 ,0 , 25, $text_color , "ttf/ttf.ttf" , $text );//méret szög xstart ystart szin ttf text
header ( "Content-Type: image/jpeg" );
imagepng ( $im );
imagedestroy ( $im ); 
?>
