<?php
class m_sajat extends CI_Model
{
    public function lekerdez() {
	    $query = $this->db->query("SELECT * FROM receptek WHERE szerzo=".$this->session->userdata('u_id'));
        
        return $query->result_array();
	}
    
     
    public function torles($uid,$rid) {
        if ($this->session->userdata('logged_in') == TRUE && $rid != null) {
            $query = $this->db->query("SELECT szerzo FROM receptek WHERE id=".$rid)->first_row('array');
            if ($query['szerzo'] != $uid) {
                return "nemsajat";
            }
            $data = array(
                   'rid'  =>  $rid
            );
            $data2 = array(
                   'id'  =>  $rid
            );
    
            $this->db->delete('receptek', $data2);
            $this->db->delete('kedvencek', $data); 
            $this->db->delete('szavazas', $data); 
            $this->db->delete('nap_receptje', $data);
            header('Location: ../../sajat');
            return true;
        }
        else return false;
    }
    
    public function szerkesztes($uid,$rid) {
        if ($this->session->userdata('logged_in') == TRUE && $rid != null) {
            $query = $this->db->query("SELECT szerzo FROM receptek WHERE id=".$rid)->first_row('array');
            if ($query['szerzo'] != $uid) {
                return "nemsajat";
            }
            $query = $this->db->query("SELECT * FROM receptek WHERE id=".$rid);
            
            return $query->result_array();
        }
        else return false;
    }
    
    public function frissit($id) {
        if (array_key_exists('adat_feltolt',$_POST)) {
    		$nev = mysql_real_escape_string(htmlspecialchars($_POST['nev']));
            $kategoria = mysql_real_escape_string(htmlspecialchars($_POST['kategoria']));
            $nehezseg = mysql_real_escape_string(htmlspecialchars($_POST['nehezseg']));
            $arkategoria = mysql_real_escape_string(htmlspecialchars($_POST['arkategoria']));
            $hozzavalok = mysql_real_escape_string(htmlspecialchars($_POST['hozzavalok']));
            $elkeszites = mysql_real_escape_string(htmlspecialchars($_POST['elkeszites']));
            $ido = mysql_real_escape_string(htmlspecialchars($_POST['ido']));
            
            $hozzavalok = str_replace('\r\n', '&#13;&#10;', $hozzavalok);
            $elkeszites = str_replace('\r\n', '&#13;&#10;', $elkeszites);
                           
            $data = array(
               'nev' => $nev,
               'nehezseg' => $nehezseg,
               'arkategoria' => $arkategoria,
               'hozzavalok' => $hozzavalok,
               'elkeszites' => $elkeszites,
               'kategoria' => $kategoria,
               'ido' => $ido
            );
            
            $this->db->where('id', $id);
            $this->db->update('receptek', $data); 
                     
            header('Location: ../../sajat');
       }
    }
}
?>
