<?php
	class sqlminta extends CI_Controller
	{
		//http://localhost/modweb013/sqlminta
		public function index()
		{
			print "ez az index";
			$lekerdezes = $this->db->query('SELECT * FROM felhasznalok');
			foreach($lekerdezes->result() as $sor)
			{
				print "Felh.id: ".$sor->id."<br>";
				print "Felh.név: ".$sor->felhasznalonev."<br><br>";
			}
		}
		//http://localhost/modweb013/sqlminta/proba
		public function proba()
		{
			print "ez egy aloldal";
			// INSERT INTO felhasznalok
			//	(felhasznalonev,jelszo) VALUES
			//	('random', 'beirtjelszo')
			
		/*	$ertekek = array();
			$ertekek['felhasznalonev'] = 'random';
			$ertekek['jelszo'] = 'beirtjelszo';
			$this->db->insert('felhasznalok', $ertekek);
		*/	
			$this->db->insert('felhasznalok', array(
				'felhasznalonev' => 'random',
				'jelszo' => 'beirtjelszo'
			));
		}
		
		
		
		
		
		
		
	}
?>