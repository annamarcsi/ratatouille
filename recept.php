<?php

class recept extends CI_Controller
{

	public function index($recept_id) {
		$this->load->model('m_hozzaferes');
		$tpl = new template();
		
		if($this->m_hozzaferes->ellenorzes())
			$tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');

		$db_recept = $this->db->query(
			 "SELECT receptek.*, kategoriak.id as kategoriaid, kategoriak.nev as kategorianev,
				felhasznalok.id as szerzoid, felhasznalok.felhasznalonev as szerzo "
			."FROM receptek, kategoriak, felhasznalok "
			."WHERE receptek.szerzo = felhasznalok.id
				AND receptek.kategoria = kategoriak.id
				AND receptek.id = '".$recept_id."'");

		if($db_recept->num_rows != 1);
		else {
			$db_recept =& $db_recept->result_array();
			$db_recept =& $db_recept[0];
			$hozzavalok = explode("\n", $db_recept['hozzavalok']);
			foreach($hozzavalok as $key => $value) $hozzavalok[$key] = trim($value);
			$db_recept['hozzavalok'] = $hozzavalok;
			$db_recept['nehezsegid'] = $db_recept['nehezseg'];
			switch($db_recept['nehezseg']) {
				case 1: $db_recept['nehezseg'] = 'Könnyű'; break;
				case 2: $db_recept['nehezseg'] = 'Közepes'; break;
				case 3: $db_recept['nehezseg'] = 'Nehéz'; break;
			}

			if($this->m_hozzaferes->ellenorzes()) {
				$tpl->assign('belepve', true);
				if($this->db->query("SELECT * FROM kedvencek "
					."WHERE felhid = '".$this->m_hozzaferes->adat('id')."' 
						AND receptid = '".$recept_id."'")->num_rows == 1)
					$tpl->assign('kedvenc', true);
			}

			$tpl->assign('recept', $db_recept);
			$tpl->display('recept.tpl');
			$this->db->query("UPDATE receptek SET megtekintve = megtekintve + 1 WHERE id = '".$recept_id."'");
		}
		$tpl->display('footer.tpl');
	}
}

?>
