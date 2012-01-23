<?php

class Main extends CI_Controller
{
	function Main()
	{
		parent::__construct();
	}
	function index()
	{
		$temp = array("temp"=>"going to put on the screen");
		$this->load->view("main/index", $temp);
	}
}

?>