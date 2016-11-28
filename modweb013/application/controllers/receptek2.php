<?php

class receptek extends CI_Controller
	{
		//http://localhost/modweb013/receptek
		public function index()
		{
			$tpl = new template();
			$tpl-> display('header.tpl');
			
			
			echo 'Ez a receptek oldal!<br>Receptek listája:<br>';
			
			$db_receptek = $this->db->query('SELECT 
					receptek.*,
					kategoriak.nev as kategorianev,
					felhasznalok.felhasznalonev as szerzo
				FROM receptek, kategoriak, felhasznalok 
				WHERE
					receptek.kategoria = kategoriak.id AND
					receptek.szerzo = felhasznalok.id');
			
			foreach($db_receptek->result() as $sor)
			{
				echo '<br>Recept neve: '.$sor->nev
					.'<br>Recept elkészitése: '.$sor->elkeszites
					.'<br>Kategória: '.$sor->kategorianev
					.'<br>Feltöltötte: '.$sor->szerzo
					.'<br>Létrehozva: '.$sor->hozzaadva.'<br>';
			}
			
			$tpl-> display('footer.tpl');
			
		}
	}