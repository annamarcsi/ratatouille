<?php

class felvitel extends CI_Controller
{
	public function index()
	{
		$hiba = null;
		if(isset($_POST) && array_key_exists('felvitel', $_POST))
		{
			if(!array_key_exists('receptname', $_POST) || strlen($_POST['receptname']) == 0)
			{
				$hiba = 'Név megadása kötelező!';
			}
			
			elseif(!array_key_exists('kat', $_POST) || strlen($_POST['kat']) == 0)
			{
				$hiba = 'Kategória megadása kötelező!';
			}
			
			elseif(!array_key_exists('elk', $_POST) || strlen($_POST['elk']) == 0)
			{
				$hiba = 'Elkészítés megadása kötelező!';
			}
			
			elseif(!array_key_exists('hozz', $_POST) || strlen($_POST['hozz']) == 0)
			{
				$hiba = 'Hozzávalók megadása kötelező!';
			}
			
			elseif(!array_key_exists('szer', $_POST) || strlen($_POST['szer']) == 0)
			{
				$hiba = 'Elkészítés megadása kötelező!';
			}
			
			else
			{
				$this->db->insert('receptek', array(
					'receptname' => $_POST['nev'],
					'kat' => $_POST['kategoria'],
					'elk' => $_POST['elkeszites'],
					'hozz' => $_POST['hozzavalok'],
					'szer' => $_POST['szerzo'])
				);
			}
		}
		
		$tpl = new template();
		$tpl-> display('header.tpl');
		$tpl-> assign('hiba', $hiba);
		$tpl-> display('felvitel.tpl');
		$tpl-> display('footer.tpl');
	}
}

?>
