<?php
class m_feltoltes extends CI_Model
{
    public function feltolt()
	{
	   if (array_key_exists('adat_feltolt',$_POST)) {
    		$nev = mysql_real_escape_string(htmlspecialchars($_POST['nev']));
            $kategoria = mysql_real_escape_string(htmlspecialchars($_POST['kategoria']));
            $nehezseg = mysql_real_escape_string(htmlspecialchars($_POST['nehezseg']));
            $hozzavalok = mysql_real_escape_string(htmlspecialchars($_POST['hozzavalok']));
            $elkeszites = mysql_real_escape_string(htmlspecialchars($_POST['elkeszites']));
            $ido = mysql_real_escape_string(htmlspecialchars($_POST['ido']));
            
            if ($nev == "" || $hozzavalok == "" || $elkeszites == "" || $ido == "" ) return "Mezők kitöltése kötelező.";
                        
            if ($_FILES['userfile']['size'] != 0) {
                $config['upload_path'] = './upload/';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['max_size']	= '200000';
        		$config['max_width']  = '2000';
        		$config['max_height']  = '2000';
                $config['overwrite']   = FALSE;
                
                $seed = 'jn2DaSDhnfasV';
                $hash = sha1(uniqid($seed . mt_rand(), true));
                $hash = substr($hash, 0, 10);
                
                $config['file_name']  = $hash;
        
        		$this->load->library('upload', $config);
        
        		if ( ! $this->upload->do_upload())
        		{
        			return "Hiba a kép feltöltéssel.";
        		}
        		else
        		{
                    $kep = $this->upload->data();
                    $kep = $kep['orig_name'];
        		}
            }
            else {
                    $kep = "default.gif";
            }
            
            $hozzavalok = str_replace('\r\n', '&#13;&#10;', $hozzavalok);
            $elkeszites = str_replace('\r\n', '&#13;&#10;', $elkeszites);
            
            $data = array(
               'nev' => $nev,
               'elkeszites' => $elkeszites,
               'hozzavalok' => $hozzavalok,
               'nehezseg' => $nehezseg,
               'kep' => $kep,
               'szerzo' => $this->session->userdata('u_id'),
               'kategoria' => $kategoria,
               'ido' => $ido
            );
            
            $this->db->insert('receptek', $data); 
            return "A recept feltöltése sikeres!";
                     
            //header('Location: ./');
       }
	}
}
?>
