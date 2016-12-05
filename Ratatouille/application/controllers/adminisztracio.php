<?php
	class session extends CI_Controller
	{
		//http://localhost/modweb013/session
		public function index()
		{
			// application/models/hozzaferes.php betoltese
			$this->load->model('hozzaferes');
			
			$tpl = new template();
			$tpl-> display('header.tpl');
			
			// ***
			
			if($this->hozzaferes->ellenorzes())
			{
				if(isset($_POST) && array_key_exists('kijelentkezes', $_POST))
				{
					$this->hozzaferes->kijelentkezes();
					header('Location: session');
				}
				
				echo 'Bejelentkezve mint: '.$this->hozzaferes->adat('felhasznalonev');
				
				if($this->hozzaferes->adat('admin') == 1)
					 $szint = 'Adminisztrátor';
				else $szint = 'Felhasználó';
				
				echo '<br>Felhasználói szint: '.$szint;
				echo '<form method="post">'
						.'<input type="submit" name="kijelentkezes"
							value="Kijelentkezés">'
					.'</form>';
			}
			else
			{
				if(isset($_POST) && array_key_exists('bejelentkezes', $_POST))
				{
					if($this->hozzaferes->bejelentkezes($_POST['felhasznalonev'], $_POST['jelszo']))
						 header('Location: session');
					else $hiba = true;
				}
				else $hiba = false;
				
				if($hiba)
				{
					echo '<form method="post">'
						.'<input type="text" name="felhasznalonev" value="'.$_POST['felhasznalonev'].'">'
						.'<input type="password" name="jelszo">'
						.'<input type="submit" name="bejelentkezes"
							value="Bejelentkezés"> Hibás felhasználónév és jelszó'
					.'</form>';
				}
				else
				{
					echo '<form method="post">'
						.'<input type="text" name="felhasznalonev">'
						.'<input type="password" name="jelszo">'
						.'<input type="submit" name="bejelentkezes"
							value="Bejelentkezés">'
					.'</form>';
				}
			
			}
			
			$tpl-> display('footer.tpl');
			
			// ***
			
			
		//	var_dump($this->hozzaferes->bejelentkezes('admin', 'admin'));
		//	var_dump($this->hozzaferes->kijelentkezes());
		//	var_dump($this->hozzaferes->ellenorzes());
			
			// hozzaferes osztaly elerese
			// $this->hozzaferes-> bejelentkezes(user,pass);
			// $this->hozzaferes-> kijelentkezes();
			
			
		}
	}
