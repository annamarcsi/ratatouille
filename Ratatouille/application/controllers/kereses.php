<?php
class kereses extends CI_Controller
{
	public function index()
	{	
		$tpl = new template();
		$this->load->model('m_hozzaferes');
		$this->load->helper('url');
		$this->load->model('m_rovid');
		if($this->m_hozzaferes->ellenorzes())
		$tpl->assign('bejelentkezve', true);
		$tpl->assign('felhasznalo', $this->m_hozzaferes->adat('felhasznalonev'));
		$tpl->display('header.tpl');
		if (isset($_POST['kereses'])) {
			$kereses_q = $_POST['kereses'];

			$kereses_query = ($this->db->query("SELECT * FROM receptek WHERE nev LIKE '%$kereses_q%'"));

			$count = $kereses_query->num_rows($kereses_query);
			if ($count == 0) 
			{
				$tpl->assign('hiba','Nincs a keresésnek megfelelő elem!!');
			}
			else
			{
				$receptek = $kereses_query->result_array();
				foreach($receptek as $kulcs => $ertek)
				{
					$receptek[$kulcs]['link'] = 'recept/'.$this->m_rovid->link($ertek['nev']).'/'.$ertek['id'];

				}

			}
		}
		error_reporting(0);
		$tpl->assign('receptek', $receptek);
		$tpl->display('kereses.tpl');
		$tpl->display('footer.tpl');
	}
}
