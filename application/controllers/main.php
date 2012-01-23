<?php

class Main extends CI_Controller
{
	function Main()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view("main/index");
	}
}