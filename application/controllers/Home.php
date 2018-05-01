<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model("Home_model");
	}

	function index()
	{
		$this->load->view('home_view');
		// $getmodel["result"] = $this->home_model->insertData();
		// $this->load->view("home_view", $getmodel);
	}

	function addDept()
	{
		echo "Ok";
	}



}