<?php

class Home_model extends CI_Model{
	function __Construct()
	{
		parent::__Construct();
		$this->db = $this->load->database("school", TRUE);
	}
	function insertData()
	{

	}
}

?>