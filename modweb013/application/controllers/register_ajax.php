<?php
class register_ajax extends CI_Controller{
    public function index(){
        $this->load->library('form_validation');
        $this->set_rules_if_exists();
        
        if($this->form_validation->run() == FALSE){
            $t=$this->form_validation->error_array();
            
        }
        else{
            
        }
    }
    
    protected function set_rules_if_exists(){
        if(isset($_POST["password"])){
            $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric|min_length[5]|max_length[20]');
        }
        if(isset($_POST["userName"])){
            $this->form_validation->set_rules('userName', 'userName', 'required|alpha_numeric|min_length[5]|max_length[40]');
        }
    }
}



?>