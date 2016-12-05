<?php

class adminisztracio extends CI_Controller
{
    public function index(){
    $this->load->model('hozzaferes');
    $tpl = new template();
    $tpl->display('header.tpl');

    if(isset($_POST) && array_key_exists('bejelentkezes',$_POST))
    {
        $this->hozzaferes->bejelentkezes(
        $_POST['felhnev'],
        $_POST['jelszo']);
    }

    if($this->hozzaferes->ellenorzes())
    { // Bejelentkezve
        echo ' Üdvözöljük, be vagy jelentkezve mint: ' .$this->hozzaferes->adat('felhasznalonev');
    }
    else
    { // Nincs bejelentkezve
        echo '<form method="POST"><table>
        <tr><th align="left">Felhasznaló név: </th><th><input type="text" name="felhnev" /></th></tr>
       <tr><th align="left"> Jelszo: </th><th><input type="password" name="jelszo" /></th></tr>
        <tr><th><input type="submit" name="bejelentkezes" value="Belépés" /></th></tr>
		</table>
        </form>';
    }
    $tpl->display('footer.tpl');
}
    public function kilepes()
    {
    $this->load->mode('hozzaferes');
    $this->m_hozzaferes->kijelentkezes();
    header('Location: adminisztracio');
	// echo '<input type="submit" name="kijelentkezes" value="Kilépés" />';
    }

}

?>
