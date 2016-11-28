<?php
session_start();
$text=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$texta=$text[rand('0','25')];
$textb=$text[rand('0','25')];
$textc=$text[rand('0','25')];
$textd=$text[rand('0','25')];
$texte=$text[rand('0','25')];
$texts=$texta.$textb.$textc.$textd.$texte;
$_SESSION['captcha_white']=$texts;
$im = @ imagecreate ( 200 , 80 );//kép generálása
imagecolorallocate ( $im ,255,255,255);//háttérszín
$text_color = imagecolorallocate ( $im , 0 , 0 , 0 );//szöveg szín
imagettftext ( $im , 40 , 0 , 34 , 45 , $text_color , "ttf/white.ttf" , $texts );
imagettftext ( $im , 40 , 0 , 34 , 51 , $text_color , "ttf/white.ttf" , $texts );//méret szög xstart ystart szin ttf text
header ( "Content-Type: image/jpeg" );
imagepng ( $im );
imagedestroy ( $im ); 
?> 
