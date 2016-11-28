<?php

class receptek extends CI_Model
{
	public function listazrecept()
	{
		$lekerdezes = $this->db->query('SELECT * FROM receptek ');
		
	}

}




?>