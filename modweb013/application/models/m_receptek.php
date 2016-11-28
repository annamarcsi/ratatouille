<?php


 class m_receptek extends CI_Controller
 {
    public function link($nev)
       {
           $nev=strtolower($nev);
           return str_replace( 
           array(' ','a','é','í','ö','ő','ü','ű','u','ú'),
           array('_','a','e','i','o','o','u','u','u','u'),
           $nev);
       }
 }


?>