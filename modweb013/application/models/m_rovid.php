<?php
	class m_rovid extends CI_Model
	{
		public function link($nev)
		{
			$nev = strtolower($nev);
			return str_replace(
				array(' ','á','é','í','ő','ő','ó','ü','ű','ú'),
				array('_','a','e','i','o','o','o','u','u','u'),
				$nev);
		}
		public function rovidleiras($leiras)
		{
			$maxhossz = 300;
			if(strlen($leiras) > $maxhossz) {
				$leiras = substr($leiras, 0, 300);
				$utsopont = strrpos($leiras, ".");
				if($utsopont !== false)
					$leiras = substr($leiras, 0, $utsopont + 1);
			} return $leiras;
		}
	}
?>