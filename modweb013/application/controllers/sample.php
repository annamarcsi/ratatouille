<?php

class sample extends CI_Controller {

	public function index()
	{
		$tpl = new template();
		$tpl-> assign("sitetitle", "CodeIgniter & Smarty: Working sample");

		$tpl-> assign("test1", "EA ".rand()." OK");
		$tpl-> assign("test2", "rf ".rand()." lowercase?");

		$tpl-> assign("frstname",array("John","Mary","James","Henry"));
		$tpl-> assign("lastname",array("Doe","Smith","Johnson","Case"));

		$tpl-> assign("contacts", array(
			array("phone" => "124-6452", "fax" => "452-5647", "cell" => "405-2042"),
			array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

		$tpl-> assign("option_values", array("NY","NE","KS","IA","OK","TX"));
		$tpl-> assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
		$tpl-> assign("option_selected", "NE");

		$tpl-> display("sample.tpl");
		print 'ok';
		$tpl-> display("sample.tpl");
		
	}
}