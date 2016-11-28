<?php
class regisztracio extends CI_Controller
{
public function captcha() 
    {
        include "captcha/captcha.php";
        return captcha_num2();
    }
	public function index() {
	session_start();

		$this->load->model('m_hozzaferes');
		$tpl = new template();   //template peldanyositasa

		if($this->m_hozzaferes->ellenorzes()) { header('Location: adminisztracio'); exit;}
		$hiba = false;
		
	//	FORM feldolgozasa
		if(isset($_POST) && array_key_exists('regisztracio', $_POST)) {
			if( !array_key_exists('felhnev', $_POST) || !array_key_exists('jelszo1', $_POST) || !array_key_exists('jelszo2', $_POST))
				$hiba = 'Érvénytelen felhasználói FORM. Folyamat leállítva!';
			elseif(strlen($_POST['felhnev']) == 0 || strlen($_POST['jelszo1']) == 0 || strlen($_POST['jelszo2']) == 0)
				$hiba = 'Kötelező minden mezőt kitölteni!';
			elseif(strlen($_POST['felhnev']) < 6)
				$hiba = 'Minimum 6 karakter hosszú felhasználónév!';
			elseif($this->db->query("SELECT * FROM felhasznalok WHERE felhasznalonev = '".$_POST['felhnev']."'")->num_rows > 0)
				$hiba = 'Ilyen felhasználónév már létezik!';
			elseif(strlen($_POST['jelszo1']) < 8)
				$hiba = 'Minumum 8 karakter hosszú jelszó!';
			elseif($_POST['jelszo1'] != $_POST['jelszo2'])
				$hiba = 'Nem egyeznek a jelszavak!';
				

			else { 
					$this->db->insert('felhasznalok', array(
					'felhasznalonev' => $_POST['felhnev'],
					'jelszo' => sha1($_POST['jelszo1']),
					'utolso_bejelentkezes' => null,
					'admin'	 => 0
					));}
			//elseif($_POST['captcha_num2'] === $_SESSION['captcha_num2'])  { 
			//		$this->db->insert('felhasznalok', array(
				//	'felhasznalonev' => $_POST['felhnev'],
				//	'jelszo' => sha1($_POST['jelszo1']),
				//	'utolso_bejelentkezes' => null,
				//	'admin'	 => 0
				//	));}
			//else
			//{ echo '<br /><span style="color:red;">Hibás kód!</span><br />'; }



			if($hiba === false && $this->m_hozzaferes->bejelentkezes($_POST['felhnev'], $_POST['jelszo1'])) // adminisztrációs oldal
			{ header('Location: adminisztracio'); exit; }
		}

		$tpl->display('header.tpl');

		if($hiba === false) $tpl->assign('uzenet', 'Adatok megadása kötelező!');
		else { // Hiba esetén.
			$tpl->assign('hibas_regisztracio', true);
			$tpl->assign('uzenet', $hiba);
		}
		   
		$tpl->display('regisztracio.tpl');
		$tpl->display('footer.tpl');
	}
	 
}
?>