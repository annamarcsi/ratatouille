<?php

include_once(BASEPATH."smarty/libs/Smarty.class.php");
class template extends smarty
{
  function __construct($cache = 0, $debug = false)
  {
	parent::__construct();
	$CI =& get_instance();
	$this->template_dir = APPPATH."views/"; // Where your templates are to be loaded from
	$this->compile_dir  = BASEPATH."smarty/compiled"; // Where templates are compiled
	$this->cache_dir    = BASEPATH."smarty/cached"; // Where templates are cached
	$this->config_dir   = BASEPATH."smarty/configs"; // Where Smarty configs are located
	$this->debugging    = $debug === true;
	$this->caching        = is_int($cache) && $cache > 0;
	$this->cache_lifetime = is_int($cache) ? $cache : 120;
	$CI->load->helper('url');
	$this->assign('baseURL', base_url());
  }
}

?>
