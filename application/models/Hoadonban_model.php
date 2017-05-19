<?php 
/**
* m
*/
class Hoadonban_model extends CI_Model
{
	
	function get(){
		$get = $this->db->get('hoadonban');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($hoadon_id){
		$this->db->where('hoadon_id',$hoadon_id);
		$get = $this->db->get('hoadonban');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getspcatalog($nhanvien_id){
		$this->db->where('nhanvien_id',$nhanvien_id);
		$get = $this->db->get('nhanvien');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;	
	}
}

 ?>