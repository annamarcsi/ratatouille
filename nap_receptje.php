<?php

class nap_receptje extends CI_Controller
{
	public function index()
	{
		$this->load->model('m_hozzaferes');
		$tpl = new template();
		if($this->m_hozzaferes->ellenorzes())
			 $tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');
		
		$db_daily = $this->db->query(
			 "SELECT * FROM napreceptje "
			."WHERE nap = '".date('Y-m-d')."'");
		if($db_daily->num_rows == 1) {
			$napi =& $db_daily->result();
			$napi =& $napi[0]->receptid;
		}
		else {
			$db_receptlist = $this->db->query("SELECT receptek.id FROM receptek");
			$recid_list = array();
			foreach($db_receptlist->result() as $recept)
				$recid_list[] = $recept->id;
			$napi =& $recid_list[rand(0, sizeof($recid_list)-1)];
			$this->db->insert('napreceptje', array(
				'nap' => date('Y-m-d'),
				'receptid' => $napi));
		}
		$db_recept = $this->db->query(
			 "SELECT receptek.*, kategoriak.id as kategoriaid, kategoriak.nev as kategorianev,
				felhasznalok.id as szerzoid, felhasznalok.felhasznalonev as szerzo "
			."FROM receptek, kategoriak, felhasznalok "
			."WHERE receptek.szerzo = felhasznalok.id
				AND receptek.kategoria = kategoriak.id
				AND receptek.id = '".$napi."'");
		if($db_recept->num_rows != 1);
		else {
			$db_recept =& $db_recept->result_array();
			$db_recept =& $db_recept[0];
			
			$hozzavalok = explode("\n", $db_recept['hozzavalok']);
			foreach($hozzavalok as $key => $value) $hozzavalok[$key] = trim($value);
			$db_recept['hozzavalok'] = $hozzavalok;
			$db_recept['nehezsegid'] = $db_recept['nehezseg'];
			$db_recept['nehezseg'] = $db_recept['nehezseg'] == 1 ? 'Könnyű' :
				($db_recept['nehezseg'] == 2 ? 'Közepes' : 'Nehéz');
			
			$tpl->assign('nap_receptje', true);
			$tpl->assign('recept', $db_recept);
			$tpl->display('recept.tpl');
		}
		$tpl->display('footer.tpl');
	}
}

?>
