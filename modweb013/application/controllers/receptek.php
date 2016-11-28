<?php

class receptek extends CI_Controller
{
	public function index() {

		$this->load->model('m_hozzaferes');

		$this->load->model('m_recept');
		$tpl = new template();
	
		if($this->m_hozzaferes->ellenorzes())
			$tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');
		
		$db_receptek = $this->db->query(
			 "SELECT receptek.*,
					kategoriak.id as kategoriaid, kategoriak.nev as kategorianev,
					felhasznalok.id as szerzoid, felhasznalok.felhasznalonev as szerzo "
			."FROM receptek, kategoriak, felhasznalok "
			."WHERE receptek.szerzo = felhasznalok.id
				AND receptek.kategoria = kategoriak.id");

		$receptek = $db_receptek->result_array();

		foreach($receptek as $kulcs => $ertek) {
			$receptek[$kulcs]['link'] = 'recept/'.$this->m_recept->link($ertek['nev']).'/'.$ertek['id'];
			$receptek[$kulcs]['leiras'] = $this->m_recept->rovidleiras($ertek['elkeszites'])." ...";
			switch($ertek['nehezseg']) {
				case 1: $receptek[$kulcs]['nehezseg'] = 'Könnyű'; break;
				case 2: $receptek[$kulcs]['nehezseg'] = 'Közepes'; break;
				case 3: $receptek[$kulcs]['nehezseg'] = 'Nehéz'; break;
			}
		}

		$tpl->assign('receptek', $receptek);
		$tpl->display('receptek.tpl');
		$tpl->display('footer.tpl');
	}
}

?>