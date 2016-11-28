<?php

class adminisztracio extends CI_Controller {
	
	

	
	public function szerkesztes(){ $this->index(); }
	public function uj_recept() {

		$this->load->model('m_hozzaferes');
		$this->load->model('m_feltoltes');
		$tpl = new template();
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl->display('header.tpl');
			$tpl->display('footer.tpl');
			return; // nincs hozzaferes
		}
		$this->load->model('m_recept');
		$tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');
		$tpl->assign('kategoriak', $this->db->query(
			 "SELECT kategoriak.* FROM kategoriak "
			."ORDER BY kategoriak.nev ASC")->result_array());
		$tpl->assign('hiba', 'Hibaüzenet teszt!');
		$tpl->display('uj_recept.tpl');
		$tpl->display('footer.tpl');
	}

	public function index() {

		$this->load->model('m_hozzaferes');
		$tpl = new template();
		
		$hibas_bejelentkezes = false;
		if(isset($_POST) && array_key_exists('bejelentkezes', $_POST)) {
			$hibas_bejelentkezes = !$this->m_hozzaferes->bejelentkezes(
				$_POST['felhnev'], $_POST['jelszo']);
		}
		if($this->m_hozzaferes->ellenorzes()) // bejelentkezve
		{
			$tpl->assign('bejelentkezve', true);
			$tpl->display('header.tpl');
			$tpl->assign('usernev', $this->m_hozzaferes->adat('felhasznalonev'));
			$tpl->assign('utolsobelepes', $this->m_hozzaferes->adat('utolso_bejelentkezes'));
			$tpl->assign('receptekszama', $this->db->query(
				 "SELECT receptek.id FROM receptek "
				."WHERE receptek.szerzo = '".$this->m_hozzaferes->adat('id')."'")->num_rows);
			$tpl->display('profil.tpl');
		}
		else // nincs bejelentkezve
		{
			$tpl->display('header.tpl');
			if($hibas_bejelentkezes) {
				$tpl->assign('hibas_belepes', true);	
				$tpl->assign('uzenet',					// hibauzenet
				 'Hibás adatok!');
			}

			else $tpl->assign('uzenet',
				 'Írja be a felhasználónevét és a jelszavát!'); 
			$tpl->display('bejelentkezes.tpl');
		}
		$tpl->display('footer.tpl');
	}

	
	public function kilepes() {
		$this->load->model('m_hozzaferes');
		if(!$this->m_hozzaferes->ellenorzes()) {

			$tpl = new template();
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}
		$this->m_hozzaferes->kijelentkezes();
		$this->load->helper('url');
		header('Location: '.$this->config->base_url().'receptek');
	}
	
	
	public function sajat_receptek() {
		$this->load->model('m_hozzaferes');
		$tpl = new template();
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}
		$this->load->model('m_recept');
		$tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');
		$db_receptek = $this->db->query(
			 "SELECT receptek.*,
					kategoriak.id as kategoriaid, kategoriak.nev as kategorianev,
					felhasznalok.id as felid, felhasznalok.felhasznalonev as szerzo "
			."FROM receptek, kategoriak, felhasznalok "
			."WHERE receptek.szerzo = felhasznalok.id
				AND receptek.kategoria = kategoriak.id
				AND felhasznalok.id = ".$this->m_hozzaferes->adat('id')." "
			."ORDER BY receptek.nev ASC");
// Ha nincs találat
		if($db_receptek->num_rows == 0){
			$tpl->assign('uzenet',
				 '<p><b>Még nem töltött fel receptet!</b><br>'
				.'Recept beküldése menüpont alatt megteheti.</p>');
			$tpl->display('receptek_sajat.tpl');
		}
	//	Talalatok megjelenitese
		else {
			$receptek = $db_receptek->result_array();
			foreach($receptek as $kulcs => $recept)
				$receptek[$kulcs]['link'] = 'recept/'.$this->m_recept->link($recept['nev']).'/'.$recept['id'];
			$tpl->assign('receptek', $receptek);
			$tpl->display('receptek_sajat.tpl');
		}
		$tpl->display('footer.tpl');
		
	}
	
	
	public function torles($recept_id, $megerosites = false) {
		$this->load->model('m_hozzaferes');

		$tpl = new template();
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}
		$this->load->helper('url');
		$recept = $this->db->query("SELECT * FROM receptek "
			."WHERE id = '".$recept_id."' AND szerzo = '".$this->m_hozzaferes->adat('id')."'");
		if($recept->num_rows < 1) {
			header('Location: '.$this->config->base_url().'adminisztracio/sajat_receptek'); exit;
		}
	//	törlés megerősítése
		if($megerosites !== false) {
			$receptadatok = $recept->first_row();
			$this->db->delete('kedvencek', array('receptid' => $receptadatok->id));
			$this->db->delete('receptek', array('id' => $receptadatok->id));
			header('Location: '.$this->config->base_url().'adminisztracio/sajat_receptek');
		}

		else {
			$tpl->assign('bejelentkezve', true);
			$tpl->display('header.tpl');
			$receptadatok = $recept->first_row('array');
			$tpl->assign('receptadat', $receptadatok);
			$tpl->display('torles.tpl');
			$tpl->display('footer.tpl');
		}
	}
	
	public function kedvenc_receptek() {

		$this->load->model('m_hozzaferes');
		$tpl = new template();
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}
		$this->load->model('m_recept');
		$tpl->assign('bejelentkezve', true);
		$tpl->display('header.tpl');
		$db_receptek = $this->db->query(
			 "SELECT receptek.*,
					kategoriak.id as kategoriaid, kategoriak.nev as kategorianev,
					felhasznalok.id as felid, felhasznalok.felhasznalonev as szerzo "
			."FROM receptek, kategoriak, felhasznalok, kedvencek "
			."WHERE receptek.szerzo = felhasznalok.id
				AND receptek.kategoria = kategoriak.id
				AND kedvencek.felhid = ".$this->m_hozzaferes->adat('id')."
				AND kedvencek.receptid = receptek.id "
			."ORDER BY receptek.nev ASC");

		if($db_receptek->num_rows == 0){
			$tpl->assign('uzenet',
				 '<p><b>Nincs kedvenc recepted!</b><br>'
				.'A recept melletti kis ikonra kattintva hozzá lehet adni.');
			$tpl->display('receptek_kedvenc.tpl');
		}

		else {
			$receptek = $db_receptek->result_array();
			foreach($receptek as $kulcs => $recept) $receptek[$kulcs]['link'] =
				'recept/'.$this->m_recept->link($recept['nev']).'/'.$recept['id'];
			$tpl->assign('receptek', $receptek);
			$tpl->display('receptek_kedvenc.tpl');
		}
		$tpl->display('footer.tpl');
	}
	
	public function kedvenc_hozzaadasa($recept_id) {
	
		$this->load->model('m_hozzaferes');
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl = new template();
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}
		$this->db->insert('kedvencek', array(
		   'felhid'		=> $this->m_hozzaferes->adat('id'),
		   'receptid'	=> $recept_id
		));
		$this->load->helper('url');
		header('Location: '.$this->config->base_url().'recept/'.rand(10000, 99999).'/'.$recept_id);
	}
	
	
	public function kedvenc_torlese($recept_id, $fromAdmin = false) {
		$this->load->model('m_hozzaferes');
		if(!$this->m_hozzaferes->ellenorzes()) {
			$tpl = new template();
			$tpl->display('header.tpl');	
			$tpl->display('footer.tpl');	
			return;
		}

		$this->db->delete('kedvencek', array(
		   'felhid'		=> $this->m_hozzaferes->adat('id'),
		   'receptid'	=> $recept_id
		));
		$this->load->helper('url');
		if($fromAdmin === false)
			 header('Location: '.$this->config->base_url().'recept/'.rand(10000, 99999).'/'.$recept_id);
		else header('Location: '.$this->config->base_url().'adminisztracio/kedvenc_receptek');
	}
}
?>