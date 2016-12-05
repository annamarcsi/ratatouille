<?php 

class Feltoltes extends CI_Controller {
    
	public function index()
	{
        $tpl = new template();
        $tpl->display('header.tpl');
		$tpl->assign('name',$this->session->userdata('felhasznalonev'));
		//$tpl->display('menu.tpl');
		$tpl->display('uj_recept.tpl');
        //$this->load->model('m_welcome');
        $tpl->display('footer.tpl');
	}
    
    public function adat_feltolt() 
    {  
        $tpl = new template();
        $tpl->display('header.tpl');
		$tpl->assign('name',$this->session->userdata('felhasznalonev'));
		//$tpl->display('menu.tpl');
        $this->load->model('m_feltoltes');
        $msg = $this->m_feltoltes->feltolt();
        $tpl->assign('msg',$msg);
		$tpl->display('uj_recept.tpl');
        //$this->load->model('m_welcome');
        $tpl->display('footer.tpl');
    }
}

?>
