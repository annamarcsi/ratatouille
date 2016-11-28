<?php
	class hozzaferes extends CI_Model
	{
		public function bejelentkezes($user, $pass)
		{
			$lekerdezes = $this->db->query('SELECT * FROM
				felhasznalok WHERE
					felhasznalonev = "'.$user.'" AND
					jelszo = "'.sha1($pass).'"');
			
			if($lekerdezes->num_rows() == 1)
			{
				$adatok = $lekerdezes->first_row('array');
				$adatok['login'] = true;
				$this->session->set_userdata($adatok);
				return true;
			}
			return false;
		}
		public function adat($kulcs, $ertek = null)	// ***
		{
			if($ertek === null)
				return $this->session->userdata($kulcs);
			$this->session->set_userdata($kulcs, $ertek);
		}
		public function ellenorzes()
		{
			return (bool)$this->session->userdata('login');
		}
		public function kijelentkezes()
		{
			$this->session->sess_destroy();
		}
	}