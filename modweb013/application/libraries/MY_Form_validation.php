<?php

class MY_Form_validation extends CI_Form_validation{


function __construct(){
    parent::__construct();
}

function error_array(){
    if(count($this->_error_array)===0){
        return FALSE;
    }else{
        return $this->error_array_make($this->_error_array);
    }
}

protected function error_array_make($errors){
    $ret=array();
    foreach($errors as $e){
        $trim=explode('|',$e);

        $ret[$trim[0]]=$trim[1];
    }
    return $ret;
}

}
?>