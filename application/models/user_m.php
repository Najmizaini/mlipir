<?php

class User_m extends CI_model{
	function gets(){}
	function get(){}
	/**
	* $data parameter data array=>column, value
	**/
	public function add($data){
		$this->db->insert("user", $data);
	}
	function edit(){}
	function del(){}


}
