<?php

class M_data extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function tampil_data(){
		$query = $this->db->get('users');
		return $query->result_array();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>
