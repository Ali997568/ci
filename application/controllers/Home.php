<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("home_model");
	}

	function index()
	{
		$getmodel["result"] = $this->home_model->getData();
		$this->load->view("home_view", $getmodel);
	}
}