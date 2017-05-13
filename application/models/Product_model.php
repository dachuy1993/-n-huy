<?php 
/**
* m
*/
class Product_model extends CI_Model
{
	
	function get(){
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($sanpham_id){
		$this->db->where('sanpham_id',$sanpham_id);
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
}

 ?>